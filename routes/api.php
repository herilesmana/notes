<?php

use Illuminate\Http\Request;

Route::get('/notes', 'NotesController@getNotes');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
