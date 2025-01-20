<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    /**
     * ! Mudar  nome da tabela ( setar caso a tabela esteja com nome incorreto na hora de usar tinker)
     */
    protected $table = 'fornecedores';

    protected $fillable = ['nome', 'site', 'uf', 'email'];
}
