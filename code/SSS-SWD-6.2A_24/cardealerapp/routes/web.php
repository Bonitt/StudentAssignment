<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;

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


// route will return a list of cars
Route::get('/cars', [CarController::class, 'index'])->name('cars.index');

// route that will allow a user to create a car
Route::get('/cars/create', [CarController::class, 'create'])->name('cars.create');

// route that will show the details of a specific contact
Route::get('/cars/{id}', [CarController::class, 'show'])->name('cars.show');

// route that will allow a user to store a new car
Route::post('/cars', [CarController::class, 'store'])->name('cars.store');

// route that will allow a user to edit a car
Route::get('/cars/{id}/edit', [CarController::class, 'edit'])->name('cars.edit');

// route that will allow a user to update a car
Route::put('/cars/{id}', [CarController::class, 'update'])->name('cars.update');

// route that will allow a user to delete a car
Route::delete('/cars/{id}', [CarController::class, 'destroy'])->name('cars.destroy');

// route that will allow a user to create a dealer
Route::get('dealers/create', [CarController::class, 'createDealer'])->name('dealers.create');

// route that will allow a user to store a new dealer
Route::post('dealers', [CarController::class, 'storeDealer'])->name('dealers.store');

// route that will return a list of dealers
Route::get('dealers', [CarController::class, 'indexDealers'])->name('dealers.index');

// route that will show the details of a specific dealer
Route::delete('dealers/{id}', [CarController::class, 'destroyDealer'])->name('dealers.destroy');  

