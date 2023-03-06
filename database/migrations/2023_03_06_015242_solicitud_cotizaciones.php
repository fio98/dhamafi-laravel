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
        Schema::create('solicitud_cotizaciones', function (Blueprint $table) {
            $table->id();
            $table->string('id_cliente');
            $table->date('fecha');
            $table->date('fecha_entrega');
            $table->longText('direccion_entrega');
            $table->string('producto');
            $table->longText('modificacion');
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
        Schema::dropIfExists('solicitud_cotizaciones');
    }
};
