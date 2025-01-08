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
        Schema::create('siswa', function (Blueprint $table) {
            $table->id();
            $table->string('id_kelas');
            $table->string('user'); // Nama pengguna
            $table->string('user_email');
            $table->string('city');
            $table->string('phone');
            $table->timestamps();
        } );
        } 


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
