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
        Schema::create('Buku',function(Blueprint $table){
            $table->integer('BukuID')->autoIncrement;
            $table->string('Judul',30);
            $table->string('Penulis',50);
            $table->string('Penerbit',50);
            $table->string('TahunTerbit',4);
            $table->integer('Stok');
            $table->string('foto',255)->nullable();
            $table->timestamps();
            $table->primary('BukuID');
       });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('Buku');
    }
};
