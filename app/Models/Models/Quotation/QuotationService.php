<?php

namespace App\Models\Models\Quotation;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuotationService extends Model
{
    use HasFactory;
    protected $fillable = [
        'quotation_id','service_type_id','move_type_id','shifting_start_date','shifting_end_date','vehicle_type_id','labour_count_id','goods_type_id','pickup_floor_id','pickup_lift_option_id','shifting_distance','is_insurance_required'
    ];

    public function quotation()
    {
        return $this->belongTo(Quotation::class);
    }
}
