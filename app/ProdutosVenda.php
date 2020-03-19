<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProdutosVenda extends Model
{
    protected $fillable = ['id', 'venda_id', 'produto_id', 'qualidade', 'valor'];

    protected $table = 'ProdutosVenda';

    public function produtosVenda() {

        return $this->hasOne(Produtos::class,'id');
    }
}
