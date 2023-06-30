<?php

use App\Http\Controllers\Auth\AuthUser;
use App\Models\User;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::controller(AuthUser::class)->group(function(){

    Route::post('/login','userLogin')->name('login');
    Route::group(['middleware' => ['role:'.User::ADMIN.'|'.User::SUPER_ADMIN]], function () {
        //
    Route::middleware('auth:sanctum')->group(function(){
        // route::get('/product/{id}','product')->name('product');
        // route::post('/registerProduct','registerProduct')->name('registerProduct');
        // route::get('/products','products')->name('products');
        // route::post('/logout','logout')->name('logout');
        route::get('/test','test')->name('test');

    });
});

});