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
            $table->string('wildlife_class')->nullable();
            $table->string('wildlife_order')->nullable();
            $table->string('wildlife_family')->nullable();
            $table->string('wildlife_genus')->nullable();
            $table->string('wildlife_species')->nullable();
            $table->string('wildlife_location')->nullable();
            $table->string('wildlife_desc',500)->nullable();
            $table->string('wildlife_pic', 300)->nullable();
            $table->string('wildlife_status')->nullable();
            $table->string('wildlife_bone')->nullable();
            $table->string('wildlife_ref')->nullable();
            $table->string('wildlife_type');
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
