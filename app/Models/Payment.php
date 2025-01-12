<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'bank_name',
        'amount',
        'user_name',
        'user_email',
        'phone',
        'provinsi',
        'kota',
        'kecamatan',
        'kelurahan',
        'bukti',
        'status',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}

