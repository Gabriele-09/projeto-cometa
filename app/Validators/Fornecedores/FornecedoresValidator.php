<?php

namespace App\Validators\Fornecedores;

class FornecedoresValidator
{
    public function getCreateRules(): array
    {
        return [];
    }

    public function getUpdateRules($id): array
    {
        return [
            'nome' => 'required | max:80',
            'cnpj' => 'required',
            'telefone' => 'string | max:20'
        ];    
    }
}
