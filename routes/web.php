<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\HostelController;

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


// Route::get('/index', function () {
//     return view('index');
// });
Route::controller(StudentController::class)->group(function () {
    Route::get('/students', 'index')->name('students.index');
    Route::get('/students/create', 'create')->name('students.create');
    Route::post('/students', 'store')->name('students.store');
    Route::get('/students/{student}', 'show')->name('students.show');
    Route::get('/students/{student}/edit', 'edit')->name('students.edit');
    Route::put('/students/{student}', 'update')->name('students.update');
    Route::delete('/students/{student}/delete', 'destroy')->name('students.delete');
});

Route::controller(HostelController::class)->group(function () {
    Route::get('/hostels', 'index')->name('hostels.index');
    Route::get('/hostels/create', 'create')->name('hostels.create');
    Route::post('/hostels', 'store')->name('hostels.store');
    Route::get('/hostels/{hostel}/edit', 'edit')->name('hostels.edit');
    Route::put('/hostels/{hostel}', 'update')->name('hostels.update');
    Route::delete('/hostels/{hostel}/delete', 'destroy')->name('hostels.delete');
});


Route::controller(DepartmentController::class)->group(function () {
    Route::get('/departments', 'index')->name('departments.index');
    Route::get('/departments/create','create')->name('departments.create');
    Route::post('/departments', 'store')->name('departments.store');
    Route::get('/departments/{department}/edit', 'edit')->name('departments.edit');
    Route::put('/departments/{department}', 'update')->name('departments.update');
    Route::delete('/departments/{department}/delete', 'destroy')->name('departments.delete');
});