<?php

namespace App\Validators\Clientes;

class ClientesValidator
{
    public static function getCreateRules(): array
    {
        return [
            'nome' => 'required | string| max:80',
            'cpf' => 'required| string | max:15',
            'telefone' => 'string | max:20'
        ];
    }

    public static function getUpdateRules($id): array
    {
        return [
            'nome' => 'string | max:80',
            'cpf' => 'string | max:15',
            'telefone' => 'string | max:20'

        ];
    }
}
