<?php

namespace App\Http\Controllers\Dashboard\Quotation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\QuotationRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class QuotationController extends Controller
{
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

    return view('dashboard.quotation.index',[
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
  }
  

    
}
