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
       Schema::create('Admin',function(Blueprint $table){
            $table->integer('AdminID')->autoIncrement;
            $table->string('Username',30);
            $table->string('Password',30);
            $table->enum('Role',['Admin','Petugas']);
            $table->timestamps();
            $table->primary('AdminID');
       });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('Admin');
    }
};
