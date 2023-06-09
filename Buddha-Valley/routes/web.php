<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BuddhaController;
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

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});
Route::get('/services', function () {
    return view('services');
});

Route::get('/video', function () {
    return view('video');
});
Route::get('/spiritual', function () {
    return view('spiritual');
});
Route::get('/guided', function () {
    return view('guided');
});
Route::get('/daily', function () {
    return view('daily');
});
Route::resource('buddhas', BuddhaController::class);

Route::get('/video', function () {
    $buddhas = App\Models\Buddha::orderBy('id', 'asc')->paginate(5);
    return view('video', compact('buddhas'));
});
