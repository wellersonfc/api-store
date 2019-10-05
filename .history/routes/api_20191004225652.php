<?php

use Illuminate\Http\Request;


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::namespace('API')->group(function(){
    Route::prefix('produtos')->group(function(){
        Route::get('/','ProdutosController@index')->name('index_produtos');
        //Rota de busca produto individual
        Route::get('/{id}','ProdutosController@show')->name('show_produtos');
        //Rota de cadastro de produtos
        Route::post('/','ProdutosController@store')->name('store_produtos');
    });
});