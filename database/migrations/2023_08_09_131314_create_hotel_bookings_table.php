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
        Schema::create('hotel_bookings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('hotel_id');
            $table->integer('passenger_count');
            $table->string('name');
            $table->decimal('package_price')->nullable();
            $table->string('total_price');
            $table->string('contact_name');
            $table->string('contact_email');
            $table->string('contact_phone_number');
            $table->text('contact_address');
            $table->timestamps();// ...other fields...
            

            $table->foreign('hotel_id')->references('id')->on('hotels')->onDelete('cascade');
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hotel_bookings');
    }
};
