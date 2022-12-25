<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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

//home route
Route::get('/', [HomeController::class, "index"]);

Route::get('/home', [HomeController::class, "index"]);
//--------------------------

Route::get('/redirects', [HomeController::class, "redirects"]);
//About us Route
Route::get('/About-Us', [HomeController::class, "about"]);

// Contact us route 
Route::get('/Contact-Us', [HomeController::class, "contact"]);
//blog route 
Route::get('/our-blog', [HomeController::class, "blog"]);
// menu route 
Route::get('/menu', [HomeController::class, "menu"]);
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

//admin routes
Route::get('/users', [AdminController::class, "user"]);
Route::get('/Bakery-Menu', [AdminController::class, "BakeryMenu"]);
Route::get('/deleteuser/{id}', [AdminController::class, "deleteuser"]);
Route::post('/upload_BakeryMenu', [AdminController::class, "upload"]);