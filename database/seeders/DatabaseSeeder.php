<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(5)->create();
        DB::table('products')->insert([
            [
                'name' => 'Airpods Wireless Bluetooth Headphones',
                'user_id' => 1,
                'image_url' => '../../ignore/images/placeholder.png',
                'brand' => 'Apple',
                'category' => 'Electronics',
                'description' => 'Bluetooth technology lets you connect it with compatible devices wirelessly High-quality AAC audio offers immersive listening experience Built-in microphone allows you to take calls while working',
                'price' => 89.99,
                'stock_quantity' => 10,
                'rating' => 0.5,
                'reviews_count' => 12,
            ],
            [
                'name' => 'iPhone 11 Pro 256GB Memory',
                'user_id' => 1,
                'image_url' => '../../ignore/images/placeholder.png',
                'brand' => 'Apple',
                'category' => 'Electronics',
                'description' => 'Introducing the iPhone 11 Pro. A transformative triple-camera system that adds tons of capability without complexity. An unprecedented leap in battery life',
                'stock_quantity' => 7,
                'price' => 599.99,
                'rating' => 1,
                'reviews_count' => 8,
            ],
            [
                'name' => 'Cannon EOS 80D DSLR Camera',
                'user_id' => 1,
                'image_url' => '../../ignore/images/placeholder.png',
                'brand' => 'Cannon',
                'category' => 'Electronics',
                'description' => 'Characterized by versatile imaging specs, the Canon EOS 80D further clarifies itself using a pair of robust focusing systems and an intuitive design',
                'stock_quantity' => 5,
                'price' => 929.99,
                'rating' => 1.5,
                'reviews_count' => 12,
            ],
            [
                'name' => 'Sony Playstation 4 Pro White Version',
                'user_id' => 1,
                'image_url' => '../../ignore/images/placeholder.png',
                'brand' => 'Sony',
                'category' => 'Electronics',
                'description' => 'The ultimate home entertainment center starts with PlayStation. Whether you are into gaming, HD movies, television, music',
                'stock_quantity' => 11,
                'price' => 399.99,
                'rating' => 2,
                'reviews_count' => 12,
            ],
            [
                'name' => 'Logitech G-Series Gaming Mouse',
                'user_id' => 1,
                'image_url' => '../../ignore/images/placeholder.png',
                'brand' => 'Logitech',
                'description' => 'Get a better handle on your games with this Logitech LIGHTSYNC gaming mouse. The six programmable buttons allow customization for a smooth playing experience',
                'stock_quantity' => 7,
                'price' => 49.99,
                'category' => 'Electronics',
                'rating' => 2.5,
                'reviews_count' => 10,
            ],
            [
                'name' => 'Amazon Echo Dot 3rd Generation',
                'user_id' => 1,
                'image_url' => '../../ignore/images/placeholder.png',
                'brand' => 'Amazon',
                'description' => 'Meet Echo Dot - Our most popular smart speaker with a fabric design. It is our most compact smart speaker that fits perfectly into small space',
                'stock_quantity' => 0,
                'price' => 29.99,
                'category' => 'Electronics',
                'rating' => 3,
                'reviews_count' => 12,
            ],
            [
                'name' => 'Google Nest Mini 2nd Generation',
                'user_id' => 1,
                'image_url' => '../../ignore/images/placeholder.png',
                'brand' => 'Google',
                'description' => 'Meet the Google Nest Mini - A compact smart speaker with improved sound quality and fabric design. Perfect for small spaces.',
                'stock_quantity' => 10,
                'price' => 39.99,
                'category' => 'Electronics',
                'rating' => 3.5,
                'reviews_count' => 18,
            ],
            [
                'name' => 'Apple HomePod Mini',
                'user_id' => 1,
                'image_url' => '../../ignore/images/placeholder.png',
                'brand' => 'Apple',
                'description' => 'Introducing the Apple HomePod Mini - A powerful smart speaker with Siri integration and a sleek design. Ideal for any room in your home.',
                'stock_quantity' => 5,
                'price' => 99.99,
                'category' => 'Electronics',
                'rating' => 4,
                'reviews_count' => 25,
            ],
            [
                'name' => 'Sonos One SL',
                'user_id' => 1,
                'image_url' => '../../ignore/images/placeholder.png',
                'brand' => 'Sonos',
                'description' => 'The Sonos One SL - A powerful smart speaker with rich sound and no microphone. Perfect for privacy-conscious users.',
                'stock_quantity' => 7,
                'price' => 179.99,
                'category' => 'Electronics',
                'rating' => 4.5,
                'reviews_count' => 30,
            ],
            [
                'name' => 'Bose Home Speaker 300',
                'user_id' => 1,
                'image_url' => '../../ignore/images/placeholder.png',
                'brand' => 'Bose',
                'category' => 'Electronics',
                'description' => 'The Bose Home Speaker 300 - Compact smart speaker with powerful bass and built-in voice control. Fits perfectly in any space.',
                'stock_quantity' => 3,
                'price' => 199.99,
                'rating' => 5,
                'reviews_count' => 40,
            ],
            [
                'name' => 'Bose Home Speaker 300',
                'user_id' => 1,
                'image_url' => '../../ignore/images/placeholder.png',
                'brand' => 'Bose',
                'category' => 'Electronics',
                'description' => 'The Bose Home Speaker 300 - Compact smart speaker with powerful bass and built-in voice control. Fits perfectly in any space.',
                'stock_quantity' => 3,
                'price' => 199.99,
                'rating' => 0,
                'reviews_count' => 0,
            ],
        ]);
    }
}
