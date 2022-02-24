<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('property_types', function (Blueprint $table) {
            $table->id();
            $table->string('propertyTypeID');
            $table->string('propertyType');
            $table->integer('propertyBedrooms');
            $table->integer('propertyBathrooms');
            $table->string('propertySize');
            $table->string('propertyDescription');
            $table->timestamps();
            $table->foreignId('propertyID');
            $table->foreign('propertyID')->references('id')->on('properties');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('property_types');
    }
};
