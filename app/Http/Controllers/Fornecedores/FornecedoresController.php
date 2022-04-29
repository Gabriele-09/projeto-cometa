<?php

namespace App\Http\Controllers\Fornecedores;

use App\Http\Client\HttpCep;
use App\Http\Controllers\Controller;
use App\Models\Fornecedores\Fornecedores;
use App\Validators\Fornecedores\FornecedoresValidator;
use Exception;
use Illuminate\Http\Request;

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
        return view('cep',[
            'tipo' => 'fornecedor'
        ]);
    }

    
    public function storeFornecedores()
    {

        $this->request->validate(FornecedoresValidator::getCreateRules());
        try {
            $fornecedor = Fornecedores::create($this->request->all());
        } catch (\Throwable $th) {
            throw new Exception($th->getMessage(), 422);
        }
        
        return view('home');
    }
}
