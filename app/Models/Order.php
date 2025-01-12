<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
    protected $fillable = ['user_id', 'materi_id','guru_id','code_kelas','status'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function materi()
    {
        return $this->belongsTo(Materi::class);
    }

    public function payment()
    {
        return $this->hasOne(Payment::class);
    }
    // public function customer()
    // {
    //     return $this->belongsTo(Customer::class);
    // }

    // public function product()
    // {
    //     return $this->belongsTo(Product::class);
    // }
}

