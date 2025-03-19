<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Fornecedor extends Model
{
    /**
     * ! Mudar  nome da tabela ( setar caso a tabela esteja com nome incorreto na hora de usar tinker)
     */

    use SoftDeletes;
    protected $table = 'fornecedores';

    protected $fillable = ['nome', 'site', 'uf', 'email'];
}
