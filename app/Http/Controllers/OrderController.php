<?php


namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Katalog;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::with('customer', 'katalog')->get();
        return view('orders.index', compact('orders'));
    }

    public function create()
    {
        $katalogs = Katalog::all();
        $customers = Customer::all();
        return view('orders.create', compact('katalogs', 'customers'));
    }

    public function store(Request $request)
    {
        $user = Auth::user();
        $order = Order::create([
            'customer_id' => $user->id,
            'katalog_id' => $request->katalog_id,
            'quantity' => 1,
            'total_price' => $request->price,
            'status' => 'pending',
        ]);

        return response()->json($order, 201);
    }
}
