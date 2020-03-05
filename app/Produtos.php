<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
    protected $fillable = ['id', 'nome', 'endereco', 'email', 'telefone'];

    protected $table = 'Produtos';

}
