<?php

namespace App\Models\Models\Quotation;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuotationNote extends Model
{
    use HasFactory;
    protected $fillable = [
        'quotation_id','additional_notes','terms_and_conditions','signature_path'
    ];

    public function quotation()
    {
        return $this->belongTo(Quotation::class);
    }
}
