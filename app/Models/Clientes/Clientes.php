<?php

namespace App\Models\Clientes;

use Illuminate\Database\Eloquent\Model;

use App\Repositories\Clientes\ClientesRepository;

class Clientes extends Model
{
    use ClientesRepository;

    protected $table = 'clientes';
    protected $primaryKey = 'cpf';

    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
       'nome',
       'cpf',
       'telefone',
       'endereco_id'

    ];
}
