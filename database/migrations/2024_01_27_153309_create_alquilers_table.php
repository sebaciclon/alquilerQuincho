<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('alquilers', function (Blueprint $table) {
            $table->id();
            $table->date("fechaAlquiler")->nullable();
            $table->string("nombre");
            $table->string("telefono");
            $table->string("email");
            $table->string("evento")->nullable();
            $table->string("pileta")->nullable();
            $table->string("observaciones")->nullable();
            $table->double("valorAlquiler")->nullable();
            $table->double("seña")->nullable();
            $table->double("resto")->nullable();
            $table->string("desdeHora");
            $table->string("hastaHora");
            $table->unsignedBigInteger('dia_id')->nullable();
            $table->foreign('dia_id')->references('id')->on('dias')->onDelete('set null');
            //$table->unsignedBigInteger('hora_desde_id')->nullable();
            //$table->foreign('hora_desde_id')->references('id')->on('horas')->onDelete('set null');
            //$table->unsignedBigInteger('hora_hasta_id')->nullable();
            //$table->foreign('hora_hasta_id')->references('id')->on('horas')->onDelete('set null');
            $table->unsignedBigInteger('horario_id')->nullable();
            $table->foreign('horario_id')->references('id')->on('horarios')->onDelete('set null');
            $table->unsignedBigInteger('socio_id')->nullable();
            $table->foreign('socio_id')->references('id')->on('socios')->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alquilers');
    }
};
