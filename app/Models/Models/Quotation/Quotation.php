<?php

namespace App\Models\Models\Quotation;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; 

class Quotation extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'user_id','customer_name','customer_phone','customer_gst','customer_pan','customer_email','client_type_id','customer_address','customer_zipcode','customer_country_id','customer_state_id','customer_city_id','dob','quotation_title','quotation_purpose','salesperson_name','quotation_date','valid_till','quotation_status_id','quotation_code','item_sub_total','item_discount_percent','item_gst_percent','advance_received','grand_total'
    ];

    protected $casts = [
        'dob' => 'date',
        'quotation_date' => 'date',
        'valid_till' => 'date'
    ];

    public function move()
    {
        return $this->hasOne(QuotationMove::class);
    }

    public function service()
    {
        return $this->hasOne(QuotationService::class);
    }

    public function charges()
    {
        return $this->hasOne(QuotationCharge::class);
    }

    public function items()
    {
        return $this->hasOne(QuotationItem::class);
    }

    public function notes()
    {
        return $this->hasOne(QuotationNote::class);
    }
}
