<?php

use App\Http\Controllers\Lesson1;
use App\Http\Controllers\Lesson2;
use App\Http\Controllers\Lesson3;
use Illuminate\Support\Facades\Route;

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

Route::get('/', fn() => view('welcome'));

Route::get('lesson1', [Lesson1::class, 'index'])->name('lesson1');

Route::get('lesson2/import', [Lesson2::class, 'import'])->name('lesson2.import');
Route::get('lesson2', [Lesson2::class, 'export'])->name('lesson2.export');

Route::get('lesson3', [Lesson3::class, 'index'])->name('lesson3');