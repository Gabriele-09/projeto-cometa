<?php

namespace App\Validators\Clientes;

class ClientesValidator
{
    public function getCreateRules(): array
    {
        return [];
    }

    public function getUpdateRules($id): array
    {
        return [
            'nome' => 'required | max:80',
            'cpf' => 'required',
            'telefone' => 'string | max:20'

        ];
    }
}
