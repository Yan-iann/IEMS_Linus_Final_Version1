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
        Schema::create('contribution',function (Blueprint $table){
            $table->bigIncrements('contri_ID');
            $table->string('contri_Date');
            $table->foreignId('user_ID')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('info_ID')->references('info_ID')->on('infocards')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contribution');
    }
};
