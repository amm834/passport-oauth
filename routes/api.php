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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user()->makeVisible([
        'password'
    ]);
});

Route::middleware('client')->get('/orders', function (Request $request) {
    return [
        'orders' => [
            [
                'id' => 1,
                'name' => 'Order 1'
            ],
            [
                'id' => 2,
                'name' => 'Order 2'
            ]
        ]
    ];
});
