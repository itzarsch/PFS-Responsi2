<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Order;
use Illuminate\Http\Request;


class OrderController extends Controller
{
    public function index()
    {
        // Ambil semua pesanan yang terkait dengan pengguna yang login
        $orders = Order::where('user_id', Auth::id())->get();

        return view('orders.index', compact('orders')); // Pastikan Anda punya view orders.index
    }

    // Menampilkan detail pesanan
    public function show($id)
    {
        $order = Order::findOrFail($id); // Mengambil pesanan berdasarkan ID

        return view('orders.show', compact('order')); // Pastikan Anda punya view orders.show
    }

    // Membuat pesanan baru
    public function store(Request $request)
    {
        // Validasi data pesanan
        $validated = $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
            // Tambahkan validasi lainnya sesuai kebutuhan
        ]);

        // Membuat pesanan baru
        $order = new Order();
        $order->user_id = Auth::id();
        $order->product_id = $validated['product_id'];
        $order->quantity = $validated['quantity'];
        // Tambahkan kolom lain seperti status, alamat, dll.
        $order->save();

        return redirect()->route('orders.index')->with('status', 'Pesanan berhasil dibuat');
    }

    // Mengubah status pesanan
    public function update(Request $request, $id)
    {
        $order = Order::findOrFail($id);
        
        // Validasi status baru
        $validated = $request->validate([
            'status' => 'required|in:pending,completed,canceled',
        ]);

        // Update status pesanan
        $order->status = $validated['status'];
        $order->save();

        return redirect()->route('orders.index')->with('status', 'Status pesanan berhasil diperbarui');
    }
}
