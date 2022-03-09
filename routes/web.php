<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\RecordController;
use App\Http\Controllers\UpdateController;



Route::get('/', function() {
    return view('index');
});
Route::post("user",[StudentController::class,'student']);

Route::get('/record', function() {
    return view('record');
});
Route::get("record",[RecordController::class,'show']);

Route::get('/update', function(){
    return view('update');
});
Route::get("update/{id}",[UpdateController::class,'update']);
Route::get("delete/{id}",[UpdateController::class, 'delete']);
Route::post("edit",[UpdateController::class,'edit']);







//Route::get('/user','StudentController@student');
//Route::get("user/{id}",'UserController@show');