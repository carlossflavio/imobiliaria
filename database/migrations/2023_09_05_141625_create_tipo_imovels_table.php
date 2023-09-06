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
        Schema::create('tipo_imovels', function (Blueprint $table) {
            $table->id();
            $table->string('nome_tipo');
            $table->unsignedBigInteger('id_tipologia');
            $table->foreign('id_tipologia')->references('id')->on('tipologias');
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
        Schema::dropIfExists('tipo_imovels');
    }
};
