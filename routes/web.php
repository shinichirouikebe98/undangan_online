<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\InvitationController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;

Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('login', [LoginController::class, 'logout'])->name('logout');

Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);

Route::get('password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('password/reset', [ResetPasswordController::class, 'reset'])->name('password.update');


Route::get('/', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/', [LoginController::class, 'login']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');


Route::get('/Invitation', [InvitationController::class, 'index'])->name('invitation.index')->middleware('auth');
Route::post('/createInvitation', [InvitationController::class, 'store'])->name('invitation.store')->middleware('auth');
Route::get('/invitation/{id}/edit', [InvitationController::class, 'edit'])->name('invitation.edit')->middleware('auth');

Route::patch('/invitation/{invitation}', [InvitationController::class, 'update'])->name('invitation.update')->middleware('auth');

Route::delete('/invitation/{invitation}', [InvitationController::class, 'destroy'])->name('invitation.destroy')->middleware('auth');
Route::get('/{invitation:name}', [InvitationController::class, 'show'])->name('invitation.show')->middleware('auth');



