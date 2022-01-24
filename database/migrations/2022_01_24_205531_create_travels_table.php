<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travels', function (Blueprint $table) {
            $table->id();
            $table->date('departure_date');
            $table->string('city', 50);
            $table->string('state', 50);
            $table->string('reference_name', 50);
            $table->string('hotel', 50);
            $table->string('phone_number_hotel', 50);
            $table->tinyInteger('stars_hotel')->unsigned();
            $table->string('address_hotel', 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('travels');
    }
}
