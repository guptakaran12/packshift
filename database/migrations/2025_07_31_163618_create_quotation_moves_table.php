<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('quotation_moves', function (Blueprint $table) {
            $table->id();
            $table->uuid('quotation_id');

            //Move From:
            $table->uuid('from_country_id');
            $table->uuid('from_state_id');
            $table->uuid('from_city_id');
            $table->string('from_address');

            //Move To:
            $table->uuid('to_country_id');
            $table->uuid('to_state_id');
            $table->uuid('to_city_id');
            $table->string('to_address');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('quotation_moves');
    }
};
