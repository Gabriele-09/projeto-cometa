<?php

namespace App\Models\Fornecedores;

use Illuminate\Database\Eloquent\Model;

use App\Repositories\Fornecedores\FornecedoresRepository;

class Fornecedores extends Model
{
    use FornecedoresRepository;

    protected $table = 'fornecedores';
    protected $primaryKey = 'cnpj';

    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
       'nome',
       'cnpj',
       'telefone',
       'endereco_id'

    ];
}
