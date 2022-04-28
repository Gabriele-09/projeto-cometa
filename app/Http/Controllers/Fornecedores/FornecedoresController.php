<?php

namespace App\Http\Controllers\Fornecedores;

use App\Http\Controllers\Controller;
use App\Models\Fornecedores\Fornecedores;

class FornecedoresController extends Controller
{
    public function view()
    {
        $fornecedores = Fornecedores::index();

        return view('fornecedores', [
            'fornecedores' => $fornecedores
        ]);
    }
    public function viewCadastro()
    {
        return view('fornecedores-cadastro');
    }
}
