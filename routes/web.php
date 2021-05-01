<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Shop\ShopController;

Route::resource('shops', ShopController::class);

Route::get("/shops_ref/{id}", "App\Http\Controllers\Shop\ShopController@show_ref");
