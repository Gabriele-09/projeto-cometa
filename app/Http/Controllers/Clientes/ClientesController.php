<?php

namespace App\Http\Controllers\Clientes;

use App\Http\Controllers\Controller;
use App\Models\Clientes\Clientes;
use Facade\FlareClient\Http\Client;

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
        return view('clientes-cadastro');
    }

    public function storeClientes()
    {
        
        $this->request->validate(ClientesValidator::getCreateRules());
        try {
            $cliente = Clientes::create($this->request->all());
        } catch (\Throwable $th) {
            //throw $th;
        }
        
        return view('clientes-cadastro',[
            'cliente' => $cliente
        ]);
    }

}