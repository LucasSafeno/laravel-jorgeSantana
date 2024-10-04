<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\TesteController;

// Route::get('/', function () {
//     return 'Ola, seja-bem vindo ao curso';
// });
// Route::get('/sobre-nos', function () {
//     return 'sobre nós';
// });

// Route::get('/contato', function () {
//     return 'contato';
// });


Route::get('/', [\App\Http\Controllers\PrincipalController::class, 'principal'])->name('site.index');

Route::get('/sobre-nos', [\App\Http\Controllers\SobreNosController::class, 'sobreNos'])->name('site.sobrenos');

Route::get('/contato', [\App\Http\Controllers\ContatoController::class, 'contato'])->name('site.contato');
Route::post('/contato', [\App\Http\Controllers\ContatoController::class, 'contato'])->name('site.contato');

Route::get('/login', function () {
  return 'login';
})->name('site.login');


/**
 *  APP
 */

Route::prefix('/app')->group(function () {

  Route::get('/clientes', function () {
    return 'Clientes';
  })->name('app.clientes');

  Route::get('/fornecedores', function () {
    return 'Fornecedores';
  })->name('app.fornecedores');

  Route::get('/produtos', function () {
    return 'Produtos';
  })->name('app.produtos');
}); // route group app


Route::get('/teste/{p1}/{p2}', [TesteController::class, 'teste'])->name('teste');

// Route::get('/rota2', function () {
//   return redirect()->route('site.rota1');
// })->name('site.rota2');

//Route::redirect('/rota2', '/rota1');


Route::fallback(function () {
  echo 'A rota acessada não existe, <a href="' . route('site.index') . '">clique aqui</a> para ir par página inicial';
});

// Route::get('/contato/{nome}/{categoria_id}', function (
//   string $nome = 'Desconhecido',
//   int $categoria_id = 1 // informação
// ) {
//   echo "Estamos aqui :  $nome - $categoria_id";
// })->where('categoria_id', '[0-9]+')->where('nome', '[A-Za-z]+');
