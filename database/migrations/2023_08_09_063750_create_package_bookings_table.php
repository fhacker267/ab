<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackageBookingsTable extends Migration
{
    public function up()
    {
        Schema::create('package_bookings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('package_id');
            $table->integer('passenger_count');
            $table->string('transport_option');
            $table->string('transport_passengers')->nullable();
            $table->decimal('package_price')->nullable();
            $table->string('total_price');
            $table->string('contact_name');
            $table->string('contact_email');
            $table->string('contact_phone_number');
            $table->text('contact_address');
            $table->timestamps();// ...other fields...
            

            $table->foreign('package_id')->references('id')->on('packages')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('package_bookings');
    }
}
