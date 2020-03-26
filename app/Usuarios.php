<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    protected $fillable = ['id', 'nome', 'email', 'senha'];

    protected $table = 'Usuarios';

    public function Jogos(){
        return $this->hasMany(Jogos::class, 'id');
    }
}
