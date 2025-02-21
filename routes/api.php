<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\CategoryController;

Route::apiResource('projects', ProjectController::class);

Route::apiResource('categories', CategoryController::class);

Route::apiResource('tasks', TaskController::class);

Route::patch('/tasks/{task}/complete', [TaskController::class, 'complete']);