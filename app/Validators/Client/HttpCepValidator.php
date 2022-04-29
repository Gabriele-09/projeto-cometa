<?php

namespace App\Validators\Client;

class HttpCepValidator
{
    public static function getConsultaRules(): array
    {
        return [
            'cep' => 'required | string| max:20',
        ];
    }

}
