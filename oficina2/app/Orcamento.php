<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orcamento extends Model
{
    protected $fillable = [
        "nome","vendedor","valor","descricao"
    ];

    protected $table = "orcamentos";
    
}
