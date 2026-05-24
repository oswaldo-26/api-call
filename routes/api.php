<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

//GET-fetch ALL students
Route::get('/students', [StudentController::class, 'index']);

//GET-fetch ONE student by ID
Route::get('/students/{id}', [StudentController::class, 'show']);

//POST-create a new student
Route::post('/students', [StudentController::class, 'store']);

//PUT-update an existing student by ID
Route::put('/students/{id}', [StudentController::class, 'update']);

//PATCH-partial update of an existing student by ID
Route::patch('/students/{id}', [StudentController::class, 'patch']);

//DELETE all students
Route::delete('/students', [StudentController::class, 'destroyAll']);

//DELETE one student by ID
Route::delete('/students/{id}', [StudentController::class, 'destroy']);

