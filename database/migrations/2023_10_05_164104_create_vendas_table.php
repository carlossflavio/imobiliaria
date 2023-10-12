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
        Schema::create('vendas', function (Blueprint $table) {
            $table->id();
            $table->datetime('data_venda');
            $table->unsignedBigInteger('id_cliente')->nullable();
            $table->unsignedBigInteger('id_user')->nullable();
            $table->unsignedBigInteger('id_imovel')->nullable();
            $table->timestamps();

            $table->foreign('id_cliente')->references('id')->on('clientes')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('id_user')->references('id')->on('users')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('id_imovel')->references('id')->on('imovels')->onDelete('CASCADE')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vendas');
    }
};
