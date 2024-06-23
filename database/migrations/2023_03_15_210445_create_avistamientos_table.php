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
        Schema::create('avistamientos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('area_id');
            $table->unsignedBigInteger('ave_id');
            $table->unsignedSmallInteger('numero_avistamientos');
            $table->date('fecha');
            $table->timestamps();

            $table->foreign('area_id')->references('id')->on('areas');
            $table->foreign('ave_id')->references('id')->on('aves');
        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('avistamientos');
    }
};
