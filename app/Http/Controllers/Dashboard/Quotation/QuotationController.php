<?php
  namespace App\Http\Controllers\Dashboard\Quotation;

  use App\Http\Controllers\Controller;
  use Illuminate\Support\Facades\Auth;
  use App\Http\Requests\QuotationRequest;
  use App\Models\Models\Quotation\Quotation;
  use Illuminate\Support\Facades\Storage;
  use Illuminate\Support\Facades\DB;
  use Exception;
  class QuotationController extends Controller
  {
      public function index()
      {
        $quotationLists = [];
        $quotationLists = DB::table('quotations')->where('user_id',Auth::id())->select('customer_name','quotation_code','quotation_date','grand_total','quotation_status_id','valid_till')->orderByDesc('quotation_date')->get();
        return view('dashboard.quotation.index',compact('quotationLists'));
      }
      public function quotationCreatePage()
      {
        $userId = Auth::id();
        $lastQuotation = DB::table('quotations')->where('user_id', $userId)
        ->orderBy('created_at', 'desc')
        ->first();

        if (!$lastQuotation) {
          $quotationId = 'QTN-00001';
        }else{
          $lastNumber = (int) str_replace('QTN-', '', $lastQuotation->quotation_code);
          $newNumber = str_pad($lastNumber + 1, 5, '0', STR_PAD_LEFT);
          $quotationId = 'QTN-' . $newNumber;
        }

        return view('dashboard.quotation.create_quotation',[
          'countries'           => DB::table('countries')->get(),
          'states'              => DB::table('states')->get(),
          'cities'              => DB::table('cities')->get(),
          'clientTypes'         => DB::table('client_types')->get(),
          'quotationStatuses'   => DB::table('quotation_statuses')->get(),
          'serviceTypes'        => DB::table('service_types')->get(),
          'goodsTypes'          => DB::table('goods_types')->get(),
          'moveTypes'           => DB::table('move_types')->get(),
          'vehicleTypes'        => DB::table('vehicle_types')->get(),
          'pickupFloors'        => DB::table('pickup_floors')->get(),
          'liftOptions'         => DB::table('lift_options')->get(),
          'labourCounts'        => DB::table('labour_counts')->get(),
          'insuranceOptions'    => DB::table('insurance_options')->get(),
          'quotationId'         => $quotationId ?? ""
        ]);
      }

      public function saveQuotation(QuotationRequest $request)
      {
          $validatedData = $request->validated();
          DB::beginTransaction(); 
          $userId = Auth::id();

          try{
              //General Details || Quotation Details || Item Summary Save In Quotations Table:
              $quotation = Quotation::create([
                  //General Details
                  'user_id'     => $userId,
                  'customer_name' => $validatedData['customer_name'] ?? "",
                  'customer_phone' => $validatedData['customer_phone'] ?? "",
                  'customer_gst'  => $validatedData['gst_number'] ?? "",
                  'customer_pan' => $validatedData['pan_number'] ?? "",
                  'customer_email' => $validatedData['customer_email'] ?? "",
                  'client_type_id' => $validatedData['client_type'] ?? "",
                  'customer_address' => $validatedData['street'] ?? "",
                  'customer_country_id' => $validatedData['country'] ?? "",
                  'customer_zipcode' => $validatedData['customer_zip_code'] ?? "",
                  'customer_state_id' => $validatedData['state'] ?? "",
                  'customer_city_id' => $validatedData['cities'] ?? "",
                  'dob' => $validatedData['dob'] ?? "",
              
                  //Quotation Details
                  'quotation_code' => $validatedData['quotation_id'] ?? "",
                  'quotation_title' => $validatedData['quotation_title'] ?? "",
                  'quotation_purpose' => $validatedData['quotation_purpose'] ?? "",
                  'valid_till' => $validatedData['valid_date'] ?? "",
                  'salesperson_name' => $validatedData['salesperson_name'] ?? "",
                  'quotation_status_id' => $validatedData['quotation_status'] ?? "",
                  'quotation_date' => $validatedData['quotation_date'] ?? "",

                  //Item Summary
                  'item_sub_total' => $validatedData['sub_amount'] ?? "",
                  'item_discount_percent' => $validatedData['avail_discount_amount'] ?? "",
                  'item_gst_percent' => $validatedData['vat'] ?? "",
                  'advance_received' => $validatedData['advance_received'] ?? "",
                  'grand_total' => $validatedData['total'] ?? "",
              ]);

              // Move Form And Move To Save In quotation_moves Table
              $quotation->move()->create([

                  //Move Form
                  'from_country_id'   => $validatedData['move_from_country'] ?? "",
                  'from_state_id'   => $validatedData['move_from_state'] ?? "",
                  'from_city_id'   => $validatedData['move_from_city'] ?? "",
                  'from_address'   => $validatedData['move_from_address'] ?? "",

                  //Move To
                  'to_country_id'   => $validatedData['move_to_country'] ?? "",
                  'to_state_id'   => $validatedData['move_to_state'] ?? "",
                  'to_city_id'   => $validatedData['move_to_city'] ?? "",
                  'to_address'   => $validatedData['move_to_address'] ?? "",
              ]);

              //Service Details Save In quotation_services Table
              $quotation->service()->create([
                'service_type_id'  =>  $validatedData['service_type'] ?? "",
                'goods_type_id'  =>  $validatedData['goods_type'] ?? "",
                'shifting_distance'  =>  $validatedData['shifting_distance'] ?? "",
                'move_type_id'  =>  $validatedData['move_type'] ?? "",
                'vehicle_type_id'  =>  $validatedData['vehicle_type'] ?? "",
                'pickup_floor_id'  =>  $validatedData['pickup_floor'] ?? "",
                'is_insurance_required'  =>  $validatedData['insurance'] ?? "",
                'shifting_start_date'  =>  $validatedData['shifting_start_date'] ?? "",
                'shifting_end_date'  =>  $validatedData['shifting_end_date'] ?? "",
                'labour_count_id'  =>  $validatedData['labour_count'] ?? "",
                'pickup_lift_option_id'  =>  $validatedData['pickup_lift'] ?? "",
              ]);

              //Service Charges Save In quotation_charges Table
              $quotation->charges()->create([
                'base_charges'  =>  $validatedData['base_charges'] ?? "",
                'unloading_charges'  =>  $validatedData['unloading_charges'] ?? "",
                'discount'  =>  $validatedData['discount'] ?? "",
                'packing_charges'  =>  $validatedData['packing_charges'] ?? "",
                'transportation_charges'  =>  $validatedData['transportation_charges'] ?? "",
                'insurance_amount'  =>  $validatedData['insurance_amount'] ?? "",
                'loading_charges'  =>  $validatedData['loading_chargers'] ?? "",
                'gst_percent'  =>  $validatedData['gst'] ?? "",
                'service_total'  =>  $validatedData['service_total'] ?? "",
              ]);

              //Item/Particulars Details Save In quotation_items Table
              $totalItems = count($request->item_name ?? []);
              $itemsArray = [];
              for($i=0; $i < $totalItems; $i++){
                  $itemsArray[] = [
                      'item_name'    => $validatedData['item_name'][$i],
                      'description'  => $validatedData['item_description'][$i],
                      'unit_price'   => $validatedData['unit_price'][$i],
                      'quantity'     => $validatedData['quantity'][$i],
                      'total'        => $validatedData['unit_price'][$i] * $validatedData['quantity'][$i]
                  ];
              }

            $quotation->items()->create(['items_json' =>$itemsArray]);

            //Quotation Notes Save In quotation_notes table
            $filePath = null;
            if (!empty($validatedData['signature_data'])) {
                $imageParts = explode(";base64,", $validatedData['signature_data']);
                $imageBase64 = base64_decode($imageParts[1]);
        
                $fileName = 'signature_' . time() . '.png';
                $filePath = 'signatures/' . $fileName;
                Storage::disk('public')->put($filePath, $imageBase64);
            }
          
            $quotation->notes()->create([
              'additional_notes'  => $validatedData['notes'] ?? "",
              'terms_and_conditions' => $validatedData['terms'] ?? "",
              'signature_path' => $filePath ?? "",
            ]);

            DB::commit();
            return response()->json(['message' => 'Quotation note saved successfully']);

          }catch(Exception $e){
            DB::rollBack();
            return response()->json(['status' => false, 'msg' => 'Something Went failed!', 'error' => $e->getMessage()],500);
          }
      }
  }
