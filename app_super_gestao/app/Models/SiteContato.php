<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SiteContato extends Model
{
    protected $fillable = ["name", "telefone", "motivo_contatos_id", "email", "mensagem"];
}
