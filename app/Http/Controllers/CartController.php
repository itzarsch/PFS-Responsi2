<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        // Check if the user has a cart, if not, create one
        $cart = Auth::user()->cart ?? Cart::create(['user_id' => Auth::id()]);
        
        return view('shop.cart', compact('cart'));
    }

    public function addToCart(Request $request, $bookId)
    {
        // Check if the user has a cart, if not, create one
        $cart = Auth::user()->cart ?? Cart::create(['user_id' => Auth::id()]);
        $book = Book::find($bookId);
        
        $existingItem = $cart->items()->where('book_id', $bookId)->first();
        
        if ($existingItem) {
            // Update quantity if item already exists in cart
            $existingItem->quantity += $request->quantity;
            $existingItem->save();
        } else {
            // Add new item to cart
            $cart->items()->create([
                'book_id' => $bookId,
                'quantity' => $request->quantity
            ]);
        }

        return redirect()->route('shop.cart');
    }

    public function removeItem($itemId)
    {
        $item = CartItem::find($itemId);
        $item->delete();

        return redirect()->route('shop.cart');
    }

    public function orderNow()
    {
        return view('shop.order'); // Arahkan ke form pemesanan
    }
}
