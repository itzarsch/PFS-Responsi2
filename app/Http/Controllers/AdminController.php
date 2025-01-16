<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Order;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin'); // Memastikan hanya admin yang bisa mengakses
    }

    public function index()
    {
        // Mengambil data untuk dashboard admin
        $catalogCount = Book::count(); // Jumlah buku di catalog
        $orderCount = Order::count();  // Jumlah pesanan yang ada
        $viewCount = User::sum('views'); 
        $latestOrders = Order::latest()->take(5)->get(); // 5 pesanan terbaru

        $monthlyIncome = Order::whereMonth('created_at', Carbon::now()->month)->sum('total_price');
        $yearlyIncome = Order::whereYear('created_at', Carbon::now()->year)->sum('total_price');

        return view('admin.dashboard', compact('catalogCount', 'orderCount', 'viewCount', 'latestOrders', 'monthlyIncome', 'yearlyIncome'));

    }

    public function views()
    {
        $users = User::all();
        return view('admin.views', compact('users'));
    }

    // Catalog Page - Show all books
    public function catalog()
    {
        $books = Book::all();
        return view('admin.catalog', compact('books'));
    }

    // Orders Page - Show orders with user details
    public function orders()
    {
        $orders = Order::with('user', 'books')->get();
        return view('admin.orders', compact('orders'));
    }

    // Income Page - Show income details
    public function income()
    {
        $monthlyIncome = Order::whereMonth('created_at', Carbon::now()->month)->sum('total_price');
        $yearlyIncome = Order::whereYear('created_at', Carbon::now()->year)->sum('total_price');
        return view('admin.income', compact('monthlyIncome', 'yearlyIncome'));
    }

}
