<?php
namespace App\Http\Controllers\Fornecedores;

use App\Http\Controllers\Controller;

class FornecedoresController extends Controller
{
    public function view()
    {
        return view('fornecedores');

    }

    public function viewCadastro()
    {
        return view('cadastro-fornecedores');
    }

}