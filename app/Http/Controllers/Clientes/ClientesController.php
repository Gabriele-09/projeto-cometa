<?php

namespace App\Http\Controllers\Clientes;

use App\Http\Controllers\Controller;
use App\Models\Clientes\Clientes;
use App\Validators\Clientes\ClientesValidator;
use Exception;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function view()
    {
        $clientes = Clientes::index();

        return view('clientes',[
            'clientes' => $clientes
        ]);
    }

    public function viewCadastro()
    {
        return view('cep',[
            'tipo' => 'cliente'
        ]);
        // return view('clientes-cadastro');
    }

    public function storeClientes()
    {
        
        $this->request->validate(ClientesValidator::getCreateRules());
        try {
            $cliente = Clientes::create($this->request->all());
        } catch (\Throwable $th) {
            throw new Exception($th->getMessage(), 422);
        }
        
        return view('home');
    }

}