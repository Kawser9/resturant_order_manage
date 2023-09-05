<?php

use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Frontend\HomeController;
use App\Models\Backend\Category;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// Frontend ......................................................
Route::get('/',[HomeController::class,'home'])->name('home');



// backend .......................................................


// Dashboard 
Route::get('/admin',[DashboardController::class,'dashboard'])->name('admin.dashboard');




// Category
Route::get('/Category-list',[CategoryController::class,'list'])->name('category.list');
Route::get('/Category-create',[CategoryController::class,'create'])->name('category.create');
Route::post('/Category-store',[CategoryController::class,'store'])->name('category.store');