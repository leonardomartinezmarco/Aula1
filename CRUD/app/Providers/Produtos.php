<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produtos extends Model {
    protected $Filltable = ['id', 'nome', 'descricao', 'preco'];

    protected $table = 'Produtos'; 
}