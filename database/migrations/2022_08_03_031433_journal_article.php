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
         Schema::create('journal_article',function (Blueprint $table){
            $table->unsignedBigInteger('info_ID');
            $table->foreign('info_ID')->references('info_ID')->on('infocards')->onDelete('cascade')->onUpdate('cascade');
            $table->string('journal_title');
            $table->string('journal_author');
            $table->string('journal_reference');
            $table->string('journal_desc');
            $table->string('date_published');
            $table->string('journal_status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('journal_article');
    }
};
