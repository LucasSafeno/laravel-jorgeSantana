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


// Route::get('/', function () {
//     return "Olá, seja bem-vindo";
// });


Route::get('/', [\App\Http\Controllers\PrincipalController::class, 'principal']);

Route::get('/contato', [\App\Http\Controllers\ContatoController::class, 'contato']);
Route::get('/contato/{nome}/{categoria}/{assunto}/{mensagem}',
 function (string $nome, string $categoria, string $assunto, string $mensagem) {
    echo "Estamos aqui - " . $nome." - Categoria  : ".$categoria.$assunto, $mensagem;
});

Route::get('/sobre-nos',[\App\Http\Controllers\SobreNosController::class, 'sobreNos']);



// Route::get('/sobre-nos', function () {
//     return 'Sobre nós';
// });


// Route::get('/contato', function () {
//     return 'Contato';
// });