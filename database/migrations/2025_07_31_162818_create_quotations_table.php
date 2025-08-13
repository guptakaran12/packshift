<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('quotations', function (Blueprint $table) {

            //General Details:
            $table->id();
            $table->uuid('user_id')->index();
            $table->string('customer_name');
            $table->string('customer_phone');
            $table->string('customer_gst')->nullable();
            $table->string('customer_pan')->nullable();
            $table->string('customer_email');
            $table->uuid('client_type_id');
            $table->string('customer_address');
            $table->string('customer_zipcode');
            $table->uuid('customer_country_id');
            $table->uuid('customer_state_id');
            $table->uuid('customer_city_id');
            $table->date('dob')->nullable();

            //Quotation Details:
            $table->string('quotation_title');
            $table->string('quotation_purpose');
            $table->string('salesperson_name');
            $table->date('quotation_date')->index();
            $table->date('valid_till');
            $table->uuid('quotation_status_id')->index();
            $table->string('quotation_code')->unique();

            // Item Summary Fields
            $table->decimal('item_sub_total', 10, 2)->default(0);
            $table->decimal('item_discount_percent', 5, 2)->nullable();
            $table->decimal('item_gst_percent', 5, 2)->nullable();
            $table->decimal('advance_received', 10, 2)->default(0);
            $table->decimal('grand_total', 10, 2)->default(0)->index();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('quotations');
    }
};
