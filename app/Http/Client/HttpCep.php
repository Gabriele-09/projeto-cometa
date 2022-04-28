<?php

namespace App\Http\Client;

class HttpCep 
{
    public function buscaEndereco ($cep)
    {
        return HttpCep::get('https://viacep.com.br/ws/'.$cep.'/json/');
    }

}