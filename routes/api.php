<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::apiResource('v1/posts', App\Http\Controllers\APIRest\V1\PostController::class);