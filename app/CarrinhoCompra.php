<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarrinhoCompra extends Model
{
    protected $fillable = ['id', 'codigo', 'nome', 'descricao', 'preco'];

    protected $table = 'CarrinhoCompra'; 
}
