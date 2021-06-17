<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\NoteController;

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

Route::get("notes/getNotes", [NoteController::class, 'getAllNotes']);
Route::post("notes/{id}", [NoteController::class, 'update']);
Route::delete("notes/{id}", [NoteController::class, 'delete']); 
