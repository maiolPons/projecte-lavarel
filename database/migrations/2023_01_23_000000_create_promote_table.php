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
        Schema::create('promote', function (Blueprint $table) {
            $table->unsignedBigInteger('races_id');
            $table->index('races_id');
            $table->unsignedBigInteger('id_sponsors');
            $table->index('id_sponsors');
            $table->timestamps();
            $table->foreign('id_sponsors')->references('id')->on('sponsors');
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
        Schema::dropIfExists('promote');
    }
};
