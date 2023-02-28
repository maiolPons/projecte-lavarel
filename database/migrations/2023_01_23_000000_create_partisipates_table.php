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
        Schema::create('partisipates', function (Blueprint $table) {
            $table->id();
            /*$table->unsignedBigInteger('participants_id');
            $table->index('participants_id');
            $table->unsignedBigInteger('insurers_id');
            $table->index('insurers_id');
            $table->unsignedBigInteger('races_id');
            $table->index('races_id');
            $table->timestamps();
            $table->foreign('participants_id')->references('id')->on('participants');
            $table->foreign('insurers_id')->references('id')->on('insurers');
            $table->foreign('races_id')->references('id')->on('races');*/
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('promote');
    }
};
