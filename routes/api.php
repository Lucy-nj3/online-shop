<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RoleController;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/create-role',[RoleController::class,'createRole']);
Route::get('/read-roles',[RoleController::class,'readAll']);
Route::get('/read-role/{id}',[RoleController::class, 'readRole']);
Route::post('/update-role/{id}',[RoleController::class, 'updateRole']);
Route::delete('/delete-role/{id}',[RoleController::class, 'deleteRole']);

Route::post('/create-category',[CategoryController::class,'createCategory']);
Route::get('/read-category',[CategoryController::class,'readAll']);
Route::get('/read-category/{id}',[CategoryController::class, 'readcategory']);
Route::post('/update-category/{id}',[CategoryController::class, 'updateCategory']);
Route::delete('/delete-category/{id}',[CategoryController::class, 'deleteCategory']);