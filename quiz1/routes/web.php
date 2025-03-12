<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InventoryController;
use path\to\model\file;



Route::get('/hello/{name}', function ($name) {
    return "Hi, $name";

});

Route::resource('/inventory', InventoryController::class);

