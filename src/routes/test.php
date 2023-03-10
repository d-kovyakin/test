<?php

use Illuminate\Support\Facades\Route;

Route::get('/test', [\kovyakin\test\Http\Controllers\TestController::class,'index']);
