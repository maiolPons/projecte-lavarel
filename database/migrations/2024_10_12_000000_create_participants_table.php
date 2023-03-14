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
        Schema::create('participants', function (Blueprint $table) {
            $table->id();
            $table->string('dni')->unique();
            $table->string('name_participant');
            $table->string('address_home');
            $table->date('date_birth');
            $table->dateTime('finish_time')->nullable();
            $table->unsignedBigInteger('insurers_id')->nullable();
            $table->index('insurers_id');
            $table->unsignedBigInteger('races_id');
            $table->index('races_id');
            $table->timestamps(); 
            $table->foreign('insurers_id')->references('id')->on('insurers');
            $table->foreign('races_id')->references('id')->on('races');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('participants');
    }
};
