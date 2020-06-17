<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Lentes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lentes', function (Blueprint $table) {
            $table->string('codigo')->primary();
            $table->string('marca');
            $table->string('nome');
            $table->integer('preco');
            $table->integer('desconto')->nullable();
            $table->string('categoria');
            $table->boolean('fretegratis');
            $table->boolean('ativo');
            $table->boolean('destaque');
            $table->string('info');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lentes');
    }
}
