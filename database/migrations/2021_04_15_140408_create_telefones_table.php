<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTelefonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('telefones', function (Blueprint $table) {
            $table->id();
            $table->string('telefone', 15);
            $table->timestamps();
        });

        Schema::create('telefone_user', function (Blueprint $table) {
            $table->foreignId('user_id');
            $table->foreignId('telefone_id');

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('telefone_id')->references('id')->on('telefones');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('telefone_user');
        Schema::dropIfExists('telefones');
    }
}
