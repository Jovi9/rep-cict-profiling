<?php

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
        Route::resource('/student_lists', \App\Http\Controllers\Admin\StudentController::class);
        Route::resource('/subject_lists', \App\Http\Controllers\Admin\SubjectController::class);
        Route::resource('/profile', \App\Http\Controllers\Admin\ProfileController::class);

        Route::get('/overview', [\App\Http\Controllers\Admin\OverviewController::class, 'index'])->name('admin.overview');
    });

    // student page
    Route::group([
        'prefix' => 'student',
        'as' => 'student.',
        'middleware' => ['check_student_status', 'role:student'],
    ], function () {

        Route::resource('/profile', \App\Http\Controllers\Student\ProfileController::class);

        Route::get('/subjects', [\App\Http\Controllers\Student\SubjectController::class, 'index'])
            ->name('subjects');
    });
});

require __DIR__ . '/auth.php';
