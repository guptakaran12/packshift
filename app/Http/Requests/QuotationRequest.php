<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuotationRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'quotation_title'       => 'nullable|string|max:191',
            'quotation_id'          => 'required|string|max:20|regex:/^QTN-\d{5}$/',
            'customer_name'         => 'required|string|max:191',
            'pan_number'            => 'nullable|string|max:10|regex:/^[A-Z]{5}[0-9]{4}[A-Z]{1}$/i',
            'street'                => 'required|string|max:255',
            'customer_phone'        => 'required|string|digits_between:10,15',
            'customer_email'        => 'required|email|max:191',
            'customer_zip_code'     => 'required|string|max:10',
            'gst_number'            => 'nullable|string|max:15|regex:/^[0-9]{2}[A-Z]{5}[0-9]{4}[A-Z]{1}[1-9A-Z]{1}Z[0-9A-Z]{1}$/i',
            'client_type'           => 'required',
            'country'               => 'required',
            'state'                 => 'required',
            'cities'                => 'required',
            'dob'                   => 'nullable|date',
            'quotation_purpose'     => 'required|string|max:191',
            'valid_date'            => 'required|date',
            'salesperson_name'      => 'required|string|max:191',
            'quotation_status'      => 'required',
            'quotation_date'        => 'required|date',

            // Move Details
            'move_from_country'     => 'required',
            'move_from_state'       => 'required',
            'move_from_city'        => 'required',
            'move_from_address'     => 'required|string|max:255',
            'move_to_country'       => 'required',
            'move_to_state'         => 'required',
            'move_to_city'          => 'required',
            'move_to_address'       => 'required|string|max:255',

            // Service Details
            'service_type'          => 'required',
            'shifting_end_date'     => 'required|date',
            'goods_type'            => 'required',
            'shifting_distance'     => 'nullable|numeric',
            'move_type'             => 'required',
            'vehicle_type'          => 'required',
            'pickup_floor'          => 'required',
            'insurance'             => 'required',
            'shifting_start_date'   => 'required|date',
            'labour_count'          => 'required',
            'pickup_lift'           => 'required',

            // Charges
            'base_charges'              => 'required|numeric|min:0',
            'unloading_charges'         => 'nullable|numeric|min:0',
            'discount'                  => 'nullable|numeric|min:0',
            'packing_charges'           => 'nullable|numeric|min:0',
            'transportation_charges'    => 'required|numeric|min:0',
            'insurance_amount'          => 'nullable|numeric|min:0',
            'loading_chargers'          => 'nullable|numeric|min:0',
            'gst'                       => 'required|numeric|min:0',
            'service_total'             => 'nullable|numeric|min:0',

            // Items (array-based validation)
            'item_name'         => 'required|array|min:1',
            'item_name.*'       => 'required|string|max:70',
            'item_description'  => 'required|array|min:1',
            'item_description.*'=> 'required|string|max:200',
            'unit_price'        => 'required|array|min:1',
            'unit_price.*'      => 'required|numeric|min:0',
            'quantity'          => 'required|array|min:1',
            'quantity.*'        => 'required|numeric|min:1',
            'total_item'       =>  'nullable|numeric|min:0',

            // Totals
            'sub_amount'             => 'nullable|numeric|min:0',
            'avail_discount_amount' => 'nullable|numeric|min:0',
            'vat'                   => 'nullable|numeric|min:0',
            'advance_received'      => 'nullable|numeric|min:0',
            'total'                 => 'nullable|numeric|min:0',

            // Notes and Terms
            'notes' => 'nullable|string|max:1000',
            'terms' => 'nullable|string|max:1000',

            // Signature
            'signature_data' => 'required|string|starts_with:data:image/png;base64',
        ];
    }

    public function messages(): array
    {
        return [
            // Quotation Info
            'quotation_id.required' => 'Quotation ID is required.',
            'quotation_id.regex' => 'Quotation ID must be in format QTN-00001.',
            'customer_name.required' => 'Customer name is required.',
            'street.required' => 'Please enter the Address',
            'street.string' => 'The Address name must be valid text.',
            'street.max' => 'The Address name must not exceed 255 characters.',
            'pan_number.regex' => 'PAN number must be valid (e.g., ABCDE1234F).',
            'customer_phone.required' => 'Customer phone is required.',
            'customer_phone.digits_between' => 'Phone number must be 10 to 15 digits.',
            'customer_email.required' => 'Customer email is required.',
            'customer_email.email' => 'Enter a valid email address.',
            'customer_zip_code.required' => 'Zip code is required.',
            'gst_number.regex' => 'GST number format is invalid.',
            'client_type.required' => 'Client type is required.',
            'country.required' => 'Country is required.',
            'state.required' => 'State is required.',
            'cities.required' => 'City is required.',
            'quotation_purpose.required' => 'Quotation purpose is required.',
            'valid_date.required' => 'Valid till date is required.',
            'salesperson_name.required' => 'Salesperson name is required.',
            'quotation_status.required' => 'Quotation status is required.',
            'quotation_date.required' => 'Quotation date is required.',

            // Move
            'move_from_country.required' => 'Move from country is required.',
            'move_from_state.required' => 'Move from state is required.',
            'move_from_city.required' => 'Move from city is required.',
            'move_from_address.required' => 'Move from address is required.',
            'move_to_country.required' => 'Move to country is required.',
            'move_to_state.required' => 'Move to state is required.',
            'move_to_city.required' => 'Move to city is required.',
            'move_to_address.required' => 'Move to address is required.',

            // Service
            'service_type.required' => 'Service type is required.',
            'goods_type.required' => 'Goods type is required.',
            'move_type.required' => 'Move type is required.',
            'vehicle_type.required' => 'Vehicle type is required.',
            'shifting_start_date.required' => 'Please select a shifting start date.',
            'shifting_start_date.date' => 'Please enter a valid date format.',
            'shifting_end_date.required' => 'Please select a shifting End date.',
            'shifting_end_date.date' => 'Please enter a valid date format.',
            'labour_count.required' => 'Please select the number of labours.',
            'pickup_floor.required' => 'Please select the pickup floor.',
            'pickup_lift.required' => 'Please select if lift is available at pickup location.',
            'insurance.required' => 'Please select if insurance is required.',

            //Charges
            'base_charges.required' => 'Please enter the base charges.',
            'base_charges.numeric' => 'Base charges must be a numeric value.',
        
            'transportation_charges.required' => 'Please enter the transportation charges.',
            'transportation_charges.numeric' => 'Transportation charges must be a numeric value.',
        
            'gst_percent.required' => 'Please enter the GST percentage.',
            'gst_percent.numeric' => 'GST percentage must be a valid number.',
            'gst_percent.max' => 'GST percentage cannot be more than 100%.',
            'gst_percent.min' => 'GST percentage cannot be less than 0%.',

            // Signature
            'signature_data.required' => 'Signature is required.',
            'signature_data.starts_with' => 'Signature must be a base64 image.',

            // Items
            'item_name.required' => 'Please enter at least one item.',
            'item_name.*.required' => 'Item name is required.',
            'item_description.required' => 'Please provide description for the item(s).',
            'item_description.*.required' => 'Description cannot be empty.',
            'unit_price.required' => 'Please enter the unit price.',
            'unit_price.*.required' => 'Unit price is required.',
            'unit_price.*.numeric' => 'Please enter a valid number for price.',
            'quantity.required' => 'Please enter the quantity.',
            'quantity.*.required' => 'Quantity is required.',
            'quantity.*.numeric' => 'Quantity must be a number.',

        ];
    }
}
