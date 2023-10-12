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
        Schema::create('arrendamentos', function (Blueprint $table) {
            $table->id();
            $table->dateTime('data_entrada');
            $table->dateTime('data_saida');
            $table->unsignedBigInteger('id_cliente')->nullable();
            $table->unsignedBigInteger('id_user')->nullable();
            $table->unsignedBigInteger('id_imovel')->nullable();

            $table->foreign('id_cliente')->references('id')->on('clientes')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('id_user')->references('id')->on('users')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('id_imovel')->references('id')->on('imovels')->onDelete('CASCADE')->onUpdate('CASCADE');

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
        Schema::dropIfExists('arrendamentos');
    }
};
