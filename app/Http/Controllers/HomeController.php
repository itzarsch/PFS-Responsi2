<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request; 

class HomeController extends Controller
{
    public function index()
    {
        // Ambil 3 buku terbaru dari database
        $newArrivals = Book::latest()->take(3)->get();

        return view('home', compact('newArrivals'));
        
    }
}
