<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;

class PaymentController extends Controller
{
    public function store(Request $request)
    {
        // Validasi data
        $request->validate([
            'bank_name' => 'required',
            'amount' => 'required|numeric',
            'user_name' => 'required',
            'user_email' => 'required|email',
            'city' => 'required',
            'phone' => 'required',
        ]);

        // Simpan ke database
        Payment::create($request->all());

        // Tambahkan flash message
        return redirect()->back()->with('success', 'Pembayaran Anda telah berhasil dilakukan!');
    }
}
