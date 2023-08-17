<?php

use App\Http\Controllers\ClientesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::post('store', [ClientesController::class, 'store']);
