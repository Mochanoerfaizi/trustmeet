<?php


namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Materi;
use App\Models\Katalog;
use App\Models\Payment;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index()  {
        $materi = Materi::all();
        return view('user.blog',compact('materi'));
    }


    public function store($id)
    {
        // dd($id);

        $getIdGuru = Materi::find($id);
        // dd($getIdGuru->user_id);
        Order::create([
            'user_id' => Auth::id(),
            'guru_id' => $getIdGuru->user_id,
            'materi_id' => $id
        ]);
        
        return redirect('/user');
    }

    public function pembayaran(){
        $dataOrder = Order::where('user_id',Auth::id())->get();
        return view('user.menuPembayaran',compact('dataOrder'));
    }

    public function kirimCode(Request $request){
        $kirimCode = Order::where([['user_id',$request->user_id],['guru_id',Auth::id()],['materi_id',$request->materi_id],['status','Dibayar']])->with('materi.kelas')->first();
        $CodeKelas = $kirimCode->materi->kelas->code_kelas;

        $Payment = Payment::where('order_id',$kirimCode->id)->first();
        // dd($Payment);
        $Payment->update([
            'status' => 'Dikonfirmasi'
        ]);

        $kirimCode->update([
            'code_kelas' => $CodeKelas
        ]);

        return redirect()->back();
    }
    // public function index()
    // {
    //     $orders = Order::with('customer', 'katalog')->get();
    //     return view('orders.index', compact('orders'));
    // }

    // public function create()
    // {
    //     $katalogs = Katalog::all();
    //     $customers = Customer::all();
    //     return view('orders.create', compact('katalogs', 'customers'));
    // }

    // public function store(Request $request)
    // {
    //     $user = Auth::user();
    //     $order = Order::create([
    //         'customer_id' => $user->id,
    //         'katalog_id' => $request->katalog_id,
    //         'quantity' => 1,
    //         'total_price' => $request->price,
    //         'status' => 'pending',
    //     ]);

    //     return response()->json($order, 201);
    // }
}
