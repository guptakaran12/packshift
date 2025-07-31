<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('quotation_services', function (Blueprint $table) {
            //Service Details:

            $table->id();
            $table->uuid('quotation_id');
            $table->uuid('service_type_id');
            $table->uuid('move_type_id');
            $table->date('shifting_start_date');
            $table->date('shifting_end_date');
            $table->uuid('vehicle_type_id');
            $table->uuid('labour_count_id');
            $table->uuid('goods_type_id');
            $table->uuid('pickup_floor_id');
            $table->uuid('pickup_lift_option_id');  
            $table->decimal('shifting_distance', 8, 2);
            $table->uuid('is_insurance_required');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('quotation_services');
    }
};
