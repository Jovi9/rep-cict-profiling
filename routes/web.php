<?php

use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Admin\SubjectController;
use GuzzleHttp\Middleware;
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

Route::get('/', function () {
    return view('welcome');
})->middleware('guest');

Route::middleware('auth', 'verified')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // administrator page
    Route::group([
        'prefix' => 'admin',
        'as' => 'admin.',
        'middleware' => ['check_if_admin', 'role:administrator'],
    ], function () {

        // Route::get('/student_lists/q', [StudentController::class, 'search'])->name('admin.student_lists.search');
        Route::resource('/student_lists', StudentController::class);
        Route::resource('/subject_lists', SubjectController::class);
        Route::resource('/profile', \App\Http\Controllers\Admin\ProfileController::class);

        Route::get('/overview', function () {
            return view('admin.overview');
        })->name('admin.overview');
    });

    // student page
    Route::group([
        'prefix' => 'student',
        'as' => 'student.',
        'middleware' => ['check_student_status', 'role:student'],
    ], function () {

        Route::resource('/profile', \App\Http\Controllers\Student\ProfileController::class);

        Route::get('/subjects', function () {
            return view('student.subjects');
        })->name('subjects');
    });
});

require __DIR__ . '/auth.php';
