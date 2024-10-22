<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/download/video', \App\Http\Controllers\DownloadVideoController::class);
