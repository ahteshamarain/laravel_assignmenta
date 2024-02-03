<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/about/{name}/{id}', function (string $name, int $id) {
//     return view('about')->with(compact('id', 'name'));
// });

// Route::get('contacts', function () {
//     return view('contact');
// })->name('contactpage');

// Route::get('/about/{name}/{id}', function (string $name, int $id) {
//     return view('about')->with(compact('id', 'name'));
// });

// Route::get('indexs', function () {
//     return view('index');
// })->name('indexpage');

// Route::get('/about/{name}/{id}', function (string $name, int $id) {
//     return view('about')->with(compact('id', 'name'));
// });

// Route::get('abouts', function () {
//     return view('about');
// })->name('aboutpage');

Route::get('/',[StudentController::class,'home'])->name('home');
Route::get('/about',[StudentController::class,'about'])->name('aboutpage');
Route::get('/contact',[StudentController::class,'contact'])->name('contactpage');
Route::get('/gallery',[StudentController::class,'gallery'])->name('gallerypage');
