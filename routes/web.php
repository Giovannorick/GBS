<?php

use App\Http\Controllers\BaseController;
use Illuminate\Support\Facades\Route;

//Home
Route::get('/', [BaseController::class, 'home']);

//Book Details
Route::get('/bookDetail/{bookId}', [BaseController::class, 'bookDetail']);

//Category
Route::get('/category/{categoryId}', [BaseController::class,'category']);

//Publisher
Route::get('/publisher', [BaseController::class, 'publisher']);

//Publisher Detail
Route::get('/publisherDetail/{publisherId}', [BaseController::class,'publisherDetail']);

//Contact Info
Route::get('/contact',[BaseController::class, 'contact']);