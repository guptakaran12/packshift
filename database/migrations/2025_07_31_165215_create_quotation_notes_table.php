<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('quotation_notes', function (Blueprint $table) {
            // QUOTATION NOTES
            
            $table->id();
            $table->uuid('quotation_id');
            $table->text('additional_notes')->nullable();
            $table->text('terms_and_conditions')->nullable();
            $table->string('signature_path')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('quotation_notes');
    }
};
