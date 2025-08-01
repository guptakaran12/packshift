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
            'street'                => 'nullable|string|max:255',
            'customer_phone'        => 'required|string|digits_between:10,15',
            'customer_email'        => 'required|email|max:191',
            'customer_zip_code'     => 'required|string|max:10',
            'gst_number'            => 'nullable|string|max:15|regex:/^[0-9]{2}[A-Z]{5}[0-9]{4}[A-Z]{1}[1-9A-Z]{1}Z[0-9A-Z]{1}$/i',
            'client_type'           => 'required|uuid',
            'country'               => 'required|uuid',
            'state'                 => 'required|uuid',
            'cities'                => 'required|uuid',
            'dob'                   => 'nullable|date',
            'quotation_purpose'     => 'required|string|max:191',
            'valid_date'            => 'required|date',
            'salesperson_name'      => 'required|string|max:191',
            'quotation_status'      => 'required|uuid',
            'quotation_date'        => 'required|date',

            // Move Details
            'move_from_country'     => 'required|uuid',
            'move_from_state'       => 'required|uuid',
            'move_from_city'        => 'required|uuid',
            'move_from_address'     => 'required|string|max:255',
            'move_to_country'       => 'required|uuid',
            'move_to_state'         => 'required|uuid',
            'move_to_city'          => 'required|uuid',
            'move_to_address'       => 'required|string|max:255',

            // Service Details
            'service_type'          => 'required|uuid',
            'shifting_end_date'     => 'nullable|date',
            'goods_type'            => 'required|uuid',
            'shifting_distance'     => 'nullable|numeric',
            'move_type'             => 'required|uuid',
            'vehicle_type'          => 'required|uuid',
            'pickup_floor'          => 'nullable|uuid',
            'insurance'             => 'nullable|uuid',
            'shifting_start_date'   => 'nullable|date',
            'labour_count'          => 'nullable|uuid',
            'pickup_lift'           => 'nullable|uuid',

            // Charges
            'base_charges'              => 'nullable|numeric|min:0',
            'unloading_charges'         => 'nullable|numeric|min:0',
            'discount'                  => 'nullable|numeric|min:0',
            'packing_charges'           => 'nullable|numeric|min:0',
            'transportation_charges'    => 'nullable|numeric|min:0',
            'insurance_amount'          => 'nullable|numeric|min:0',
            'loading_chargers'          => 'nullable|numeric|min:0',
            'gst'                       => 'nullable|numeric|min:0',
            'servise_total'             => 'nullable|numeric|min:0',

            // Items
            'item_name'         => 'nullable|array',
            'item_name.*'       => 'nullable|string|max:191',
            'item_description'  => 'nullable|string|max:255',
            'unit_price'        => 'nullable|numeric|min:0',
            'total_item'        => 'nullable|numeric|min:0',
            'sub_amount'        => 'nullable|numeric|min:0',
            'avail_discount_amount' => 'nullable|numeric|min:0',
            'vat'               => 'nullable|numeric|min:0',
            'advance_received'  => 'nullable|numeric|min:0',
            'total'             => 'nullable|numeric|min:0',

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
            'quotation_id.required' => 'Quotation ID is required.',
            'quotation_id.regex' => 'Quotation ID must be in format QTN-00001.',
            'customer_name.required' => 'Customer name is required.',
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
            'move_from_country.required' => 'Move from country is required.',
            'move_from_state.required' => 'Move from state is required.',
            'move_from_city.required' => 'Move from city is required.',
            'move_from_address.required' => 'Move from address is required.',
            'move_to_country.required' => 'Move to country is required.',
            'move_to_state.required' => 'Move to state is required.',
            'move_to_city.required' => 'Move to city is required.',
            'move_to_address.required' => 'Move to address is required.',
            'service_type.required' => 'Service type is required.',
            'goods_type.required' => 'Goods type is required.',
            'move_type.required' => 'Move type is required.',
            'vehicle_type.required' => 'Vehicle type is required.',
            'signature_data.required' => 'Signature is required.',
            'signature_data.starts_with' => 'Signature must be a base64 image.',
        ];
    }
}
