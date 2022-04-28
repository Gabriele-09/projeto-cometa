<?php

namespace App\Http\Controllers\Clientes;

use App\Http\Controllers\Controller;
use App\Models\Clientes\Clientes;
use Facade\FlareClient\Http\Client;

class ClientesController extends Controller
{

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

}