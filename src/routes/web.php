<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
*/
Route::namespace('Faridibin\EasyForms\Http\Controllers')->group(function () {
    Route::resource('contact', 'EasyFormsController')->except(['create' ,'show', 'edit', 'update', 'destroy']);
});
