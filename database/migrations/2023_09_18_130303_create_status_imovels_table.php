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
        Schema::create('status_imovels', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('id_imovel');
        $table->enum('estado', ['disponivel', 'arrendamento', 'vendido']);
        $table->date('data_venda');
        $table->date('inicio_arrendamento');
        $table->date('fim_arrendamento');
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
        Schema::dropIfExists('status_imovels');
    }
};
