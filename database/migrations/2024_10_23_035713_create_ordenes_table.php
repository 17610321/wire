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
        Schema::create('ordenes', function (Blueprint $table) {
            $table->id();
            $table->integer('cliente');
            $table->unsignedBigInteger('entrega_id');
            $table->foreign('entrega_id')->references('id')->on('entregas')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('cantidad');
            $table->date('fecha');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ordenes');
    }
};
