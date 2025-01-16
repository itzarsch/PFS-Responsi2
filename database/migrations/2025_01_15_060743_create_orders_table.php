<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    // public function store(Request $request)
    // {
    //     $order = new Order();
    //     $order->user_id = auth()->user()->id;
    //     $order->book_id = $request->book_id; // Menggunakan book_id, bukan product_id
    //     $order->quantity = $request->quantity;
    //     $order->status = 'pending';
    //     $order->save();

    //     return redirect()->route('orders.index');
    // }

    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('book_id');
            $table->integer('quantity');
            $table->string('status')->default('pending');
            $table->timestamps();

            // Foreign key relationships
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('book_id')->references('id')->on('books')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }

};