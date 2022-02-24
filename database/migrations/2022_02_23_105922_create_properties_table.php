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
            $table->string('propertyID')->unique();
            $table->string('propertyName');
            $table->string('propertyLocation');
            $table->string('propertyStatus');
            $table->timestamps();
            $table->foreignId('agentID');
            $table->foreign('agentID')->references('id')->on('agents');
            

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
