<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Materi;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    public function store(Request $request)
    {
        // Validasi data
        $request->validate([
            'nama_bank' => 'required',
            'order' => 'required|numeric',
            'pembayaran' => 'required',
            'nama' => 'required',
            'email' => 'required|email',
            'provinsi' => 'required|string',
            'kota' => 'required|string',
            'kecamatan' => 'required|string',
            'kelurahan' => 'required|string',
            'no_telp' => 'required',
            'bukti' => 'required|image',
        ]);

        $buktiPembayaran = $request->file('bukti')->store('public/bukti');
        // Simpan ke database
        Payment::create([
            'order_id' => $request->order,
            'bank_name' => $request->nama_bank,
            'amount' => $request->pembayaran,
            'user_name' => $request->nama,
            'user_email' => $request->email,
            'phone' => $request->no_telp,
            'provinsi' => $request->provinsi,
            'kota' => $request->kota,
            'kecamatan' => $request->kecamatan,
            'kelurahan' => $request->kelurahan,
            'bukti' => $buktiPembayaran,
        ]);
        $statusOrder = Order::find($request->order);
        // dd($statusOrder);

        $statusOrder->update([
            'status' => 'Dibayar'
        ]);

        // Tambahkan flash message
        return redirect()->back()->with('success', 'Pembayaran Anda telah berhasil dilakukan!');
    }

    public function tampilPembayaran(){

        $pembayaran = Order::where([['guru_id', Auth::id()]])->get();
        // dd($pembayaran);
        return view('guru.daftarPesanan',compact('pembayaran'));
    }
}
