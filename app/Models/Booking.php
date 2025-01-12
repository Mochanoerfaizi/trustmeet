<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tutor;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'tutor_id',
        'booking_date',
        'status',
        'notes',
    ];

    // Relasi dengan pengguna
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relasi dengan tutor (atau model lain, misalnya `Tutor`)
    // public function tutor()
    // {
    //     return $this->belongsTo(Tutor::class);
    // }
}
