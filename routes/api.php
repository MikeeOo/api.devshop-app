<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::group(['domain' => env('API_URL')], function () {

    Route::get('/', function () {
        return response('OK', 200);
    });

    //  Route::group(['prefix' => 'products', 'as' => 'products.']
    Route::group(['prefix' => 'products'], function () {
        $products = [
            [
                'id' => '1',
                'name' => 'Airpods Wireless Bluetooth Headphones',
                'image' => '../../ignore/images/placeholder.png',
                'description' => 'Bluetooth technology lets you connect it with compatible devices wirelessly High-quality AAC audio offers immersive listening experience Built-in microphone allows you to take calls while working',
                'brand' => 'Apple',
                'category' => 'Electronics',
                'price' => 89.99,
                'countInStock' => 10,
                'score' => 0.5,
                'numReviews' => 12,
            ],
            [
                'id' => '2',
                'name' => 'iPhone 11 Pro 256GB Memory',
                'image' => '../../ignore/images/placeholder.png',
                'description' => 'Introducing the iPhone 11 Pro. A transformative triple-camera system that adds tons of capability without complexity. An unprecedented leap in battery life',
                'brand' => 'Apple',
                'category' => 'Electronics',
                'price' => 599.99,
                'countInStock' => 7,
                'score' => 1,
                'numReviews' => 8,
            ],
            [
                'id' => '3',
                'name' => 'Cannon EOS 80D DSLR Camera',
                'image' => '../../ignore/images/placeholder.png',
                'description' => 'Characterized by versatile imaging specs, the Canon EOS 80D further clarifies itself using a pair of robust focusing systems and an intuitive design',
                'brand' => 'Cannon',
                'category' => 'Electronics',
                'price' => 929.99,
                'countInStock' => 5,
                'score' => 1.5,
                'numReviews' => 12,
            ],
            [
                'id' => '4',
                'name' => 'Sony Playstation 4 Pro White Version',
                'image' => '../../ignore/images/placeholder.png',
                'description' => 'The ultimate home entertainment center starts with PlayStation. Whether you are into gaming, HD movies, television, music',
                'brand' => 'Sony',
                'category' => 'Electronics',
                'price' => 399.99,
                'countInStock' => 11,
                'score' => 2,
                'numReviews' => 12,
            ],
            [
                'id' => '5',
                'name' => 'Logitech G-Series Gaming Mouse',
                'image' => '../../ignore/images/placeholder.png',
                'description' => 'Get a better handle on your games with this Logitech LIGHTSYNC gaming mouse. The six programmable buttons allow customization for a smooth playing experience',
                'brand' => 'Logitech',
                'category' => 'Electronics',
                'price' => 49.99,
                'countInStock' => 7,
                'score' => 2.5,
                'numReviews' => 10,
            ],
            [
                'id' => '6',
                'name' => 'Amazon Echo Dot 3rd Generation',
                'image' => '../../ignore/images/placeholder.png',
                'description' => 'Meet Echo Dot - Our most popular smart speaker with a fabric design. It is our most compact smart speaker that fits perfectly into small space',
                'brand' => 'Amazon',
                'category' => 'Electronics',
                'price' => 29.99,
                'countInStock' => 0,
                'score' => 3,
                'numReviews' => 12,
            ],
            [
                'id' => '7',
                'name' => 'Google Nest Mini 2nd Generation',
                'image' => '../../ignore/images/placeholder.png',
                'description' => 'Meet the Google Nest Mini - A compact smart speaker with improved sound quality and fabric design. Perfect for small spaces.',
                'brand' => 'Google',
                'category' => 'Electronics',
                'price' => 39.99,
                'countInStock' => 10,
                'score' => 3.5,
                'numReviews' => 18,
            ],
            [
                'id' => '8',
                'name' => 'Apple HomePod Mini',
                'image' => '../../ignore/images/placeholder.png',
                'description' => 'Introducing the Apple HomePod Mini - A powerful smart speaker with Siri integration and a sleek design. Ideal for any room in your home.',
                'brand' => 'Apple',
                'category' => 'Electronics',
                'price' => 99.99,
                'countInStock' => 5,
                'score' => 4,
                'numReviews' => 25,
            ],
            [
                'id' => '9',
                'name' => 'Sonos One SL',
                'image' => '../../ignore/images/placeholder.png',
                'description' => 'The Sonos One SL - A powerful smart speaker with rich sound and no microphone. Perfect for privacy-conscious users.',
                'brand' => 'Sonos',
                'category' => 'Electronics',
                'price' => 179.99,
                'countInStock' => 7,
                'score' => 4.5,
                'numReviews' => 30,
            ],
            [
                'id' => '10',
                'name' => 'Bose Home Speaker 300',
                'image' => '../../ignore/images/placeholder.png',
                'description' => 'The Bose Home Speaker 300 - Compact smart speaker with powerful bass and built-in voice control. Fits perfectly in any space.',
                'brand' => 'Bose',
                'category' => 'Electronics',
                'price' => 199.99,
                'countInStock' => 3,
                'score' => 5,
                'numReviews' => 40,
            ],
            [
                'id' => '11',
                'name' => 'Bose Home Speaker 300',
                'image' => '../../ignore/images/placeholder.png',
                'description' => 'The Bose Home Speaker 300 - Compact smart speaker with powerful bass and built-in voice control. Fits perfectly in any space.',
                'brand' => 'Bose',
                'category' => 'Electronics',
                'price' => 199.99,
                'countInStock' => 3,
                'score' => 0,
                'numReviews' => 0,
            ],
        ];

        Route::get('/', fn () => response($products)
            ->header('Access-Control-Allow-Origin', 'http://localhost:3000')
            ->header('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS')
            ->header('Access-Control-Allow-Headers', 'Content-Type, Accept, Authorization, X-Requested-With')
        );

        Route::get('/{id}', fn ($id) => response(...array_filter($products, fn ($el) => $id === $el['id']))
            ->header('Access-Control-Allow-Origin', 'http://localhost:3000')
            ->header('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS')
            ->header('Access-Control-Allow-Headers', 'Content-Type, Accept, Authorization, X-Requested-With')
        );
    });
});

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});
