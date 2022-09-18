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
        Schema::create('thesis_paper',function (Blueprint $table){
            $table->unsignedBigInteger('info_ID');
            $table->foreign('info_ID')->references('info_ID')->on('infocards')->onDelete('cascade')->onUpdate('cascade');
            $table->string('thesis_title');
            $table->string('thesis_author');
            $table->string('thesis_reference');
            $table->string('thesis_file');
            $table->string('thesis_type');
            $table->string('date_published');
            $table->string('thesis_status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('thesis_paper');
    }
};
