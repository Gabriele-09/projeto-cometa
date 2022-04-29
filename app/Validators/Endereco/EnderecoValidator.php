<?php

namespace App\Validators\Endereco;

class EnderecoValidator
{

    public static function getRules(): array
    {
        return [
            'cep' => 'required | string | max:20',
            'rua' => 'required| string | max:80',
            'bairro' => 'required| string | max:80',
            'cidade' => 'required| string | max:60',
            'estado' => 'required| string | max:60',
            'ibge' => 'required| string | max:60'
        ];    
    }
}
