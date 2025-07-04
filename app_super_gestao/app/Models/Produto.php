<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = ["nome", "descricao", "peso", "unidade_id", 'fornecedor_id'];

    public function produto_detalhe()
    {
        return $this->hasOne('App\Models\ProdutoDetalhe');
    }

    public function fornecedor()
    {
        return $this->belongsTo('App\Models\Fornecedor');
    }
}
