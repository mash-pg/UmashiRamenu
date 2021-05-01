<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Shop\ShopController;

Route::resource('shops', ShopController::class);
