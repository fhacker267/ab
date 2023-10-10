<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('visa_bookings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('visa_id');
            $table->integer('passenger_count');
            $table->string('country');
            $table->decimal('package_price')->nullable();
            $table->string('total_price');
            $table->string('contact_name');
            $table->string('contact_email');
            $table->string('contact_phone_number');
            $table->text('contact_address');
            $table->timestamps();// ...other fields...
            

            $table->foreign('visa_id')->references('id')->on('visas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visa_bookings');
    }
};
