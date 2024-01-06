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
        Schema::create('trs_menus', function (Blueprint $table) {
            $table->bigIncrements('id');
            // $table->bigInteger('id_otoritas');
            // $table->bigInteger('id_menu');
            $table->dateTime('tanggal_buat')->useCurrent();
            
            
            $table->foreignId('id_otoritas')->references('id')->on('otoritas')->constrained()->restrictOnDelete()->restrictOnUpdate();
            $table->foreignId('id_menu')->references('id')->on('menus')->constrained()->restrictOnDelete()->restrictOnUpdate();
            $table->index(['id_otoritas'],'id_otoritas');
            $table->index(['id_menu'],'id_menu');
             
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trs_menus');
    }
};
