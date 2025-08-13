<?php

namespace App\Models\Models\Quotation;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuotationCharge extends Model
{
    use HasFactory;
    protected $fillable = [
        'quotation_id', 'base_charges', 'packing_charges', 'loading_charges','unloading_charges', 'transportation_charges','gst_percent','discount','insurance_amount','service_total',
    ];

    public function quotation()
    {
        return $this->belongTo(Quotation::class);
    }
}
