<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use App\Models\Order;
use App\Models\User;
use App\Models\Book;
use Carbon\Carbon;

class OrderSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        // Get all users and books
        $users = User::all();
        $books = Book::all();

        // Create 10 orders
        foreach (range(1, 10) as $index) {
            $user = $users->random(); // Random user
            $book = $books->random(); // Random book

            // Create an order
            Order::create([
                'user_id' => $user->id,
                'status' => $faker->randomElement(['pending', 'completed', 'canceled']), // Random status
                'book_id' => $book->id, // Assuming you have a book_id in your orders table
                'quantity' => $faker->numberBetween(1, 5), // Random quantity
                'total_price' => $faker->randomFloat(2, 10, 100), // Random total price between 10 and 100
                'created_at' => Carbon::now()->subDays(rand(1, 30)), // Random created date within the last 30 days
                'updated_at' => Carbon::now()->subDays(rand(1, 30)), // Random updated date within the last 30 days
            ]);
        }
    }
}