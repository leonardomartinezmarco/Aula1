<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jogos extends Model
{
    protected $fillable = ['id', 'nome', 'desc', 'usuario_id', 'categoria_id'];
    
    protected $table = 'Jogos';

    public function Usuarios(){
        return $this->belongsTo(Usuarios::class, 'usuario_id');
    }

    public function Categorias(){
        return $this->hasMany(Categorias::class, 'id');
    }
}
