<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Cores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cores', function (Blueprint $table) {
            $table->string('lente_codigo');
            $table->string('cor')->primary();
            $table->string('tom');
            $table->integer('estoque');
            $table->foreign('lente_codigo')->references('codigo')->on('lentes');
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
        Schema::dropIfExists('cores');
    }
}
