<?php

use App\Http\Controllers\Client\HttpCepController;
use App\Http\Controllers\Clientes\ClientesController;
use App\Http\Controllers\Endereco\EnderecoController;
use App\Http\Controllers\Fornecedores\FornecedoresController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});


Route::get('/cep', function () {
    return view('cep');
});

// Route::get('/consulta/cep', function () {
//     return view('consulta-cep');
// });

Route::get(
    '/fornecedores',
    [FornecedoresController::class, 'view']
);

Route::get(
    '/fornecedores/cadastro',
    [FornecedoresController::class, 'viewCadastro']
);

Route::post(
    '/fornecedores',
    [FornecedoresController::class, 'storeFornecedores']
);

Route::get(
    '/clientes',
    [ClientesController::class, 'view']
);

Route::get(
    '/clientes/cadastro',
    [ClientesController::class, 'viewCadastro']
);

Route::post(
    '/clientes',
    [ClientesController::class, 'storeClientes']
);


Route::get(
    '/consulta/fornecedor',
    [FornecedoresController::class, 'storeFornecedores']
);


Route::get(
    '/consulta/cep',
    [HttpCepController::class, 'buscaEndereco']
);

Route::post(
    '/endereco',
    [EnderecoController::class, 'storeEndereco']
);