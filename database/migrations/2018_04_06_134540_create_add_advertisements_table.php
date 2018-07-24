<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddAdvertisementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('add_advertisements', function (Blueprint $table) {
            $table->increments('id');
            $table->string('property_title');
            $table->string('type');
            $table->string('location');
            $table->string('email');
            $table->string('phone_number');
            $table->string('short_details');
            $table->string('property_cost');
            $table->string('ad_type');
            $table->string('details');
            $table->text('property_image');
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
        Schema::dropIfExists('add_advertisements');
    }
}
