<?php

use Illuminate\Http\Request;


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::namespace('API')->group(function(){
    Route::prefix('produtos')->group(function(){
        Route::get('/','ProdutosController@index')->name('produtos_index');
        Route::get('/{id}','ProdutosController@show')->name('produtos_show');
    });
});