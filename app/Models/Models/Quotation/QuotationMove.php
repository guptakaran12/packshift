<?php

namespace App\Models\Models\Quotation;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuotationMove extends Model
{
    use HasFactory;
    protected $fillable = [
        'quotation_id','from_country_id','from_state_id','from_city_id','from_address','to_country_id','to_state_id','to_city_id','to_address'
    ];

    public function quotation()
    {
        return $this->belongTo(Quotation::class);
    }
}
