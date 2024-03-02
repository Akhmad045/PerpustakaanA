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
        Schema::create('Koleksi_Pribadi',function(Blueprint $table){
            $table->integer('KoleksiID')->autoIncrement;
            $table->integer('UserID');
            $table->integer('BukuID');
            $table->timestamps();
            $table->primary('KoleksiID');
       });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('Koleksi_Pribadi');
    }
};
