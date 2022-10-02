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
         Schema::create('wildlife',function (Blueprint $table){
            $table->foreignId('info_ID')->references('info_ID')->on('infocards')->onDelete('cascade')->onUpdate('cascade');
            $table->string('wildlife_name');
            $table->string('wildlife_scientific_name');
            $table->string('wildlife_class');
            $table->string('wildlife_order');
            $table->string('wildlife_family');
            $table->string('wildlife_genus');
            $table->string('wildlife_species');
            $table->string('wildlife_location');
            $table->string('wildlife_desc');
            $table->string('wildlife_pic', 300);
            $table->string('wildlife_status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wildlife');
    }
};
