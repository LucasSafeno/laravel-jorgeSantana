<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = 'produtos';

    protected $fillable = ["nome", "descricao", "peso", "unidade_id"];

    public function produto_detalhe()
    {
        return $this->hasOne('App\Models\ItemDetalhe', 'produto_id', 'id');
    }
}
