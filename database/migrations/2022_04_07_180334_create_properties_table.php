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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('propertyName')->unique();
            $table->string('propertyType');
            $table->string('propertyLocation');
            $table->string('propertyStatus');
            $table->string('propertyPrice');
            $table->integer('propertyBedrooms');
            $table->integer('propertyBathrooms');
            $table->string('propertyImage');
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
        Schema::dropIfExists('properties');
    }
};
