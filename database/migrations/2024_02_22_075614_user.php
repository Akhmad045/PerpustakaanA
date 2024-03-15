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
        Schema::create('User',function(Blueprint $table){
            $table->integer('UserID')->autoIncrement();
            $table->string('Username',50);
            $table->string('Password',50);
            $table->string('Email',50);
            $table->string('NamaLengkap',50);
            $table->text('Alamat');
            $table->timestamps();
       });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('User');
    }
};
