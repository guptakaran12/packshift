

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('quotation_charges', function (Blueprint $table) {
            //Service Charges:

            $table->id();
            $table->uuid('quotation_id');
            $table->decimal('base_charges', 10, 2);
            $table->decimal('packing_charges', 10, 2);
            $table->decimal('loading_charges', 10, 2);
            $table->decimal('unloading_charges', 10, 2);
            $table->decimal('transportation_charges', 10, 2);
            $table->decimal('gst_percent', 5, 2);
            $table->decimal('discount', 5, 2)->nullable();
            $table->decimal('insurance_amount', 10, 2)->nullable();
            $table->decimal('service_total', 10, 2);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('quotation_charges');
    }
};
