<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    protected $fillable = ['id', 'codigo', 'nome', 'endereco', 'email', 'telefone', 'cidade', 'estado'];

    protected $table = 'Clientes';
}
