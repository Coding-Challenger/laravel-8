<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnderecosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enderecos', function (Blueprint $table) {
            $table->id();
            $table->string('endereco');
            $table->string('cidade');
            $table->string('estado');
            $table->string('cep', 10);
            $table->timestamps();
        });

        Schema::create('endereco_user', function (Blueprint $table) {
            $table->foreignId('user_id');
            $table->foreignId('endereco_id');

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('endereco_id')->references('id')->on('enderecos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('endereco_user');
        Schema::dropIfExists('enderecos');
    }
}
