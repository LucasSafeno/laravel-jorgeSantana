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




Route::get('/', [\App\Http\Controllers\PrincipalController::class, 'principal'])->name('site.index');

Route::get('/contato', [\App\Http\Controllers\ContatoController::class, 'contato'])->name('site.contato');

Route::get('/sobre-nos',[\App\Http\Controllers\SobreNosController::class, 'sobreNos'])->name('site.sobrenos');

Route::get('/login', function(){return 'Login';})->name('site.login');


//? Agrupamento de rotas - app
Route::prefix('/app')->group(function () {
    Route::get('/clientes', function () {
        return 'Clientes';})->name('app.clientes');
    
    Route::get('/fornecedores', function () {
        return 'Fornecedores'; })->name('app.fornecedores');
    
    Route::get('/produtos', function () {
        return 'Produtos';})->name('app.produtos');
    
});




// Route::get('/contato/{nome}/{categoria_id}', function (
//     string $nome,
//     int $categoria_id = 1
//     ) {

//     echo "Estamos aqui " . $nome . " - " . $categoria_id;
//     })->where('categoria_id', '[0-9]+')->where('nome', '[A-Za-z]+');

//? Valores padrões/opicionais devem ser declarados da direita para esquerda
// Route::get(
//     '/contato/{nome?}/{categoria?}/{assunto?}/{mensagem?}',
//     function (
//         string $nome        = 'Desconhecido',
//         string $categoria   = 'Informação',
//         string $assunto     = 'Contato',
//         string $mensagem    = "mensagem não informada") 
//         {
//         echo "Estamos aqui - " . $nome . " - Categoria  : " . $categoria . $assunto . $mensagem;
//         });

// Route::get('/sobre-nos', function () {
//     return 'Sobre nós';
// });


// Route::get('/contato', function () {
//     return 'Contato';
// });