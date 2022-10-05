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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
<<<<<<< HEAD
=======
            $table->string('name');
>>>>>>> b08349f869f3ae0d513dec19386c7bf6f7949dd8
            $table->string('email');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
<<<<<<< HEAD
            $table->foreignId('user_ID')->references('user_ID')->on('user_info')->onDelete('cascade')->onUpdate('cascade');
=======
            $table->string('role');
>>>>>>> b08349f869f3ae0d513dec19386c7bf6f7949dd8
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
