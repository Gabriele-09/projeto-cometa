<?php

namespace App\Http\Controllers\Endereco;

use App\Http\Controllers\Controller;
use App\Models\Endereco\Endereco;
use App\Validators\Endereco\EnderecoValidator;
use Exception;
use Illuminate\Http\Request;

class EnderecoController extends Controller
{
    public function __construct(Request $request)
    {
        $this->request = $request;
    }
    
    public function storeEndereco()
    {
        $this->request->validate(EnderecoValidator::getRules());
        
        try {
            $endereco = Endereco::create($this->request->all());
            if ($this->request->tipo == 'fornecedor') {
                
                return view('fornecedores-cadastro',[
                    'endereco' => $endereco
                ]);
            }
    
            if ($this->request->tipo == 'cliente') {
                
                return view('clientes-cadastro',[
                    'endereco' => $endereco
                ]);
            }

        } catch (\Throwable $th) {
            throw new Exception($th->getMessage(), 422);
        }
        
    }



}
