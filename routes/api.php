<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/{delivery}', [\App\Http\Controllers\DeliveryController::class, "handle"]);
