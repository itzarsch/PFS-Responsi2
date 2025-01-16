<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'product_id',
        'quantity',
        'status'];

    // Relasi dengan model User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relationship to Books
    public function books()
    {
        return $this->belongsToMany(Book::class)->withPivot('quantity', 'price'); // Assuming a pivot table for books in orders
    }

    // Relationship with Orders
    public function orders()
    {
        return $this->belongsToMany(Order::class)->withPivot('quantity', 'price');
    }


    // Relasi dengan model Product
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
