<?php

use Illuminate\Support\Facades\Route;
use PhpParser\Node\Stmt\Use_;

use  App\Http\Controllers\Teachers\TeachersController;
use  App\Http\Controllers\Teachers\TeacherController;
use  App\Http\Controllers\Reviews\ReviewController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MailController;


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

Route::group(['prefix' => '/teachers/', 'as' => 'teachers.'], function () {

    Route::get('list', [TeachersController::class, 'list'])->name('list');

    Route::get('show/{id}', [TeacherController::class, 'show'])->name('show');

    Route::post('destroy/{id}', [TeacherController::class, 'destroy'])->name('destroy');

    Route::get('create', [TeacherController::class, 'getCreateView'])->name('getCreateView');

    Route::post('create', [TeacherController::class, 'create'])->name('create');

    Route::get('update/{id}', [TeacherController::class, 'getUpdateView'])->name('getUpdateView');

    Route::post('update/{id}', [TeacherController::class, 'update'])->name('update');
});


Route::post('/reviews/create/{teacher_id}', [ReviewController::class, 'create'])->name('reviews.create');

Route::get('/send-email-view/{id}', [MailController::class, 'getSendEmailView'])->name('email.getSendEmailView');
Route::get('/send-email', [MailController::class, 'sendEmail'])->name('email.send');


Route::get('/{any}', [HomeController::class, 'home']);
