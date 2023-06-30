<?php

use App\Http\Controllers\Auth\AuthUser;
use App\Http\Controllers\ClientUser\ClientUser;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::controller(ClientUser::class)->group(function(){

    Route::group(['middleware' => ['role:'.User::ADMIN.'|'.User::SUPER_ADMIN.'|'.User::CLIENT_USER]], function () {
      
    Route::middleware('auth:sanctum')->group(function(){
        route::get('/viewReports','viewReports')->name('viewReports');

    });
});

});