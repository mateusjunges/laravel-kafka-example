<?php

use App\Http\Controllers\ProducerController;
use Illuminate\Support\Facades\Route;

Route::get('/produce', ProducerController::class);
