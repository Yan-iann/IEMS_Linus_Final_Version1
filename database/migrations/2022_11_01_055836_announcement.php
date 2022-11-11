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
        Schema::create('announcement',function(Blueprint $table){
            $table->bigIncrements('anno_ID');
            $table->string('anno_title');
            $table->string('anno_author');
            $table->date('anno_date');
            $table->string('anno_content');
            $table->string('anno_status');
            $table->foreignId('user_ID')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
