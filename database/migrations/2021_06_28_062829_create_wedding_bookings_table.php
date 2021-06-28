<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWeddingBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wedding_bookings', function (Blueprint $table) {
            $table->increments('id');
            
            $table->string('first_name', 64);
            $table->string('last_name', 64);
            $table->string('email', 50)->nullable();
            $table->string('phone', 50)->nullable();
            $table->string('vehicle_type', 50)->nullable();
            $table->string('booking_date', 50)->nullable();

            $table->enum('status',array('active','inactive','cancel'))->nullable();
            $table->string('created_by',50)->nullable();
            $table->string('updated_by',50)->nullable();
            $table->timestamps();

            $table->engine= 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wedding_bookings');
    }
}
