<?php

namespace App\Http\Controllers\Fornecedores;

use App\Http\Controllers\Controller;
use App\Models\Fornecedores\Fornecedores;

class FornecedoresController extends Controller
{
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

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

    
    public function storeFornecedores()
    {
        
        $this->request->validate(FornecedoresValidator::getCreateRules());
        try {
            $fornecedor = Fornecedores::create($this->request->all());
        } catch (\Throwable $th) {
            //throw $th;
        }
        
        return view('cep-fornecedor',[
            'fornecedor' => $fornecedor
        ]);
    }

    public function buscaCep($id)
    {
        HttpCep::buscaEndereco($this->request->cep);

    }
}
