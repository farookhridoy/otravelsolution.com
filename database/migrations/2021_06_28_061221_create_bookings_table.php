<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 64);
            $table->string('email', 50)->nullable();
            $table->string('phone', 50)->nullable();

            $table->enum('type',array('booking','airport'))->nullable();
            $table->string('pickup_date', 50)->nullable();
            $table->string('pickup_time', 50)->nullable();
            $table->text('pickup')->nullable();
            $table->text('dropoff')->nullable();
            $table->text('flight_details')->nullable();

            $table->boolean('return_journey')->default(false);
            $table->string('return_date', 50)->nullable();
            $table->string('return_time', 50)->nullable();

            $table->string('no_of_passengers', 50)->nullable();
            $table->string('vehicle_type', 50)->nullable();
            $table->string('paymnet_type', 50)->nullable();
            $table->text('driver_note')->nullable();

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
        Schema::dropIfExists('bookings');
    }
}
