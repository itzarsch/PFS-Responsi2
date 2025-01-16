<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class ShopController extends Controller
{
    public function index()
    {
        // Mengambil semua buku dari database
        $books = Book::all();

        // Mengirim data buku ke view
        return view('shop.index', compact('books'));
    }

    public function show($id)
    {
        $book = Book::findOrFail($id);
        return view('shop.show', compact('book'));
    }

    public function addToCart($id)
    {
        // Logika untuk menambahkan buku ke keranjang
        // Ini dapat disesuaikan dengan kebutuhan Anda
        // Misalnya, menyimpan ID buku di session atau database

        return redirect()->route('shop.index')->with('success', 'Book added to cart!');
    }

    public function cart()
    {
        // Logika untuk menampilkan halaman keranjang belanja
        return view('shop.cart');
    }
}
