<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('pembelis', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('phone');
        $table->string('alamat');
        $table->string('brand');
        $table->string('model');
        $table->string('harga'); // Pastikan tipe data sesuai harga
        $table->string('foto')->nullable();
        $table->foreignId('laptop_id')->constrained('penjualans')->onDelete('cascade');
        $table->timestamps();
    });
    
}

public function down()
{
    Schema::dropIfExists('pembelis');
}

};
