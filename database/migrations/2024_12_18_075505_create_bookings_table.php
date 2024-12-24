<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // ID pengguna yang membuat booking
            $table->unsignedBigInteger('tutor_id'); // ID tutor yang dibooking
            $table->timestamp('booking_date'); // Tanggal booking
            $table->string('status')->default('pending'); // Status booking (pending, confirmed, canceled)
            $table->text('notes')->nullable(); // Catatan tambahan dari pengguna
            $table->timestamps(); // created_at dan updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};