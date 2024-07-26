<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IdeaController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'dashboard'])->name('showDashboard');

//Idea&Comment Routes

Route::post('/idea/submit', [IdeaController::class, 'submit'])->name('submitIdea');

Route::get('/idea/show/{id}', [IdeaController::class, 'show'])->name('showIdea');

Route::get('/idea/edit/{id}', [IdeaController::class, 'edit'])->name('editIdea')->middleware('auth');

Route::put('/idea/update/{id}', [IdeaController::class, 'update'])->name('updateIdea')->middleware('auth');

Route::delete('/idea/delete/{id}', [IdeaController::class, 'delete'])->name('deleteIdea')->middleware('auth');

Route::post('/idea/{id}/comment', [CommentController::class, 'submit'])->name('submitComment')->middleware('auth');

//Auth Routes

Route::get('/register', [AuthController::class, 'register'])->name('registerUser');

Route::post('/register', [AuthController::class, 'store']);

Route::get('/login', [AuthController::class , 'login'])->name('loginUser');

Route::post('/login', [AuthController::class , 'authenticate']);

Route::post('/logout', [AuthController::class , 'logout'])->name('logoutUser');