<?php

namespace App\Models\Models\Quotation;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuotationItem extends Model
{
    use HasFactory;
    protected $fillable = [
        'quotation_id','items_json'
    ];

    protected $casts = [
        'items_json' => 'array'
    ];

    public function quotation()
    {
        return $this->belongTo(Quotation::class);
    }
}
