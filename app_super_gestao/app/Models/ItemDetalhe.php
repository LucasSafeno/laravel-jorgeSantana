<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ItemDetalhe extends Model
{
    protected $table = "produto_detalhes";
    protected $fillable = ['produto_id', 'comprimento', 'largura', 'altura', 'unidade_id'];

    public function produto()
    {
        return $this->belongsTo(Item::class, 'produto_id', 'id');
    }
}
