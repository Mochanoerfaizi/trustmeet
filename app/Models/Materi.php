<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materi extends Model
{
    use HasFactory;

    protected $table = 'materi';

    protected $fillable = [
        'user_id',
        'kelas_id',
        'judul',
        'topik',
        'modul',
        'deskripsi',
        'harga',
        'gambar',
        'fileModul',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
