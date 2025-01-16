<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('books')->insert([
            [
                'title' => 'The Great Gatsby',
                'genre' => 'Fiction',
                'author' => 'F. Scott Fitzgerald',
                'date_publish' => '1925-04-10',
                'price' => 10.99,
                'cover_image' => 'images/1.png',
            ],
            [
                'title' => 'To Kill a Mockingbird',
                'genre' => 'Fiction',
                'author' => 'Harper Lee',
                'date_publish' => '1960-07-11',
                'price' => 8.99,
                'cover_image' => 'images/2.png',
            ],
            [
                'title' => '1984',
                'genre' => 'Dystopian',
                'author' => 'George Orwell',
                'date_publish' => '1949-06-08',
                'price' => 9.99,
                'cover_image' => 'images/3.png',
            ],
            [
                'title' => 'Pride and Prejudice',
                'genre' => 'Romance',
                'author' => 'Jane Austen',
                'date_publish' => '1813-01-28',
                'price' => 7.99,
                'cover_image' => 'images/4.png',
            ],
            [
                'title' => 'The Catcher in the Rye',
                'genre' => 'Fiction',
                'author' => 'J.D. Salinger',
                'date_publish' => '1951-07-16',
                'price' => 6.99,
                'cover_image' => 'images/5.png',
            ],
        ]);
    }
    
}
