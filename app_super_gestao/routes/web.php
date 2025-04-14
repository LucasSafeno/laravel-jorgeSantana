<?php

use GuzzleHttp\Middleware;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\SobreNosController;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\FornecedorController;


use App\Http\Middleware\LogAcessoMiddleware;

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


Route::get('/', [PrincipalController::class, 'principal'])
    ->name('site.index')
    ->middleware('log.acesso');

Route::get('/contato', [ContatoController::class, 'contato'])
    ->name('site.contato');


Route::post('/contato', [ContatoController::class, 'salvar'])->name('site.contato');

Route::get('/sobre-nos', [SobreNosController::class, 'sobreNos'])
    ->name('site.sobrenos');

Route::get('/login{error?}', [LoginController::class, 'index'])->name('site.login');
Route::post('/login', [LoginController::class, 'autenticar'])->name('site.login');


//? Agrupamento de rotas - app
Route::middleware('autenticacao:padrao,visitante')->prefix('/app')->group(function () {

    Route::get('/home', [HomeController::class, 'index'])->name('app.home');
    Route::get('/sair', [LoginController::class, 'sair'])->name('app.sair');
    Route::get('/clientes', [ClientesController::class, 'index'])->name('app.clientes');

    Route::get('/fornecedores', [FornecedorController::class, 'index'])->name('app.fornecedores');

    Route::get('/fornecedores/adicionar', [FornecedorController::class, 'adicionar'])->name('app.fornecedores.adicionar');
    Route::post('/fornecedores/adicionar', [FornecedorController::class, 'adicionar'])->name('app.fornecedores.adicionar');

    Route::post('/fornecedores/listar', [FornecedorController::class, 'listar'])->name('app.fornecedores.listar');
    Route::get('/fornecedores/editar/{id}/{msg?}/', [FornecedorController::class, 'editar'])->name('app.fornecedores.editar');


    Route::get('/produtos', [ProdutosController::class, 'index'])->name('app.produtos');

});


//Route::get('/teste/{p1}/{p2}',[\App\Http\Controllers\TesteController::class,'teste'])->name('teste');


Route::fallback(function () {
    echo 'A rota acessada não existe. <a href="' . route('site.index') . '">Clique aqui</a> para ir para página inicial';
});

// Route::get('/rota1', function () {
//     echo 'rota 1'; })->name('site.rota1');
// Route::get('/rota2', function () {
//     return redirect()->route('site.rota1');
// })->name('site.rota2');
//Route::redirect('/rota2', '/rota1');

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