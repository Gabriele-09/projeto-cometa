<?php

namespace App\Models\Endereco;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{

    protected $table = 'endereco';
    protected $primaryKey = 'cep';

    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
       'cep',
       'rua',
       'bairro',
       'cidade',
       'estado',
       'ibge'

    ];
}
