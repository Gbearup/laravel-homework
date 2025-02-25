<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Carcontroller;

// Route::get('/', function () {
//     return view('welcome');



// $data = env('MY_PWD');
// dd($data);

// });

Route::get('/', function () {
    return view('index');
});



// Route::get('/bs', function () {
//     return view('indexBS');
// });


// Route::get('/foods', function () {
//     return view('food.index');
// })->name('foods.index');


// Route::get('/foods/f1', function () {
//     return view('food.f1');

// })->name('foods.f1');

// Route::get('/test', function () {
//     return redirect()->route('foods.index');
// });

// cars

// Route::get('/cars', function () {
//     return view('car.index');
// })->name('cars.index');


// Route::get('/cars/create', function () {
//     return view('car.create');
// })->name('cars.create');

// Route::get('/cars/update', function () {
//     return view('car.update');
// })->name('cars.update');

// Route::get('/cars/del', function () {
//     return view('car.del');
// })->name('cars.del');

// cars


 
Route::resource('cars', CarController::class);
