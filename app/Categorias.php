<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categorias extends Model
{
    protected  $fillable = ['id', 'nome'];

    protected  $table = 'Categorias';

     public function Jogos() {
        return  $this->hasMany (Jogos:: class, 'id');
    }
}
