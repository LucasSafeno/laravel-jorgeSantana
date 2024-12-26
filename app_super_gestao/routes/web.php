<?php

use Illuminate\Support\Facades\Route;

/** 
 * * Verbos http
 * ? get
 * ? post
 * ? patch
 * ? delete
 * ? options
 * 
 * TODO Router::verbo($uri,$callback);
 */

Route::get('/', function () {
    return "Olá, seja bem-vindo";
});


Route::get('/sobre-nos', function () {
    return 'Sobre nós';
});


Route::get('/contato', function () {
    return 'Contato';
});