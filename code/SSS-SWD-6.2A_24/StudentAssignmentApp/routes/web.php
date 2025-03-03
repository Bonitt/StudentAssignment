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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/colleges', function () {
    return "<h1>All Colleges</h1>";
})->name('colleges.index');

Route::get('/colleges/create', function () {
    return "<h1>Add new college</h1>";
})->name('colleges.create');

Route::get('/colleges/{id}/edit', function ($id) {
    return "<h1>Edit college with id: $id</h1>";
})->name('colleges.edit');

Route::get('/students', [StudentController::class, 'index'])->name('students.index');

Route::get('/students/create', [StudentController::class, 'create'])->name('students.create');

Route::get('/students/{id}', [StudentController::class, 'show'])->name('students.show');




Route::get('/students/{id}/edit', function ($id) {
    return "<h1>Edit student with id: $id</h1>";
})->name('students.edit');

