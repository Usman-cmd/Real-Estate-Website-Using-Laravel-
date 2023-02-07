<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PropertyController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/index',[PropertyController::class,'index']);

Route::get('/create',function(){
return view('create');
});

Route::post('/post',[PropertyController::class,'store']);
Route::delete('/delete/{id}',[PropertyController::class,'destroy']);
Route::get('/edit/{id}',[PropertyController::class,'edit']);

Route::delete('/deleteimage/{id}',[PropertyController::class,'deleteimage']);
Route::delete('/deletecover/{id}',[PropertyController::class,'deletecover']);

Route::put('/update/{id}',[PropertyController::class,'update']);
Route::get('/view',[PropertyController::class,'view']);




