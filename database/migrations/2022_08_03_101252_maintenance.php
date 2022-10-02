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
        Schema::create('maintenance',function (Blueprint $table){
            $table->bigIncrements('maintain_ID');
            $table->string('maintain_Date');
            $table->foreignId('user_ID')->references('user_ID')->on('user')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('maintenance');
    }
};
