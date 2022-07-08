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
        Schema::create('servicios', function (Blueprint $table) {
            $table->id();
            $table->foreignId('proveedor_id')->constrained();
            $table->foreignId('chofer_id')->constrained();
            $table->foreignId('vehiculo_id')->constrained();
            $table->dateTime('fechaServicio');
            $table->String('tipoServicio');
            $table->timestamp('horaServicio');
            $table->boolean('estado');
            $table->double('tarifa');  
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
        Schema::dropIfExists('servicios');
    }
};
