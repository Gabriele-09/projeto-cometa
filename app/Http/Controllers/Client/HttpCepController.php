<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Endereco\Endereco;
use App\Validators\Client\HttpCepValidator;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HttpCepController extends Controller
{
   
    public function buscaEndereco (Request $request)
    {
        $request->validate(HttpCepValidator::getConsultaRules());

        $endereco =  Http::get("https://viacep.com.br/ws/".$request->cep."/json/");
        
        $response = $this->verificaResponse($endereco);

        return view ('consulta-cep',[
            'endereco' => $response,
            'tipo'     => $request->tipo
        ]);

    }

    public function verificaResponse($response)
    {
        $response = json_decode($response);
        
        if (isset($response->cep)) return $response;
       
        throw new Exception("Favor Informar CEP Válido", 422);
        
    }

}