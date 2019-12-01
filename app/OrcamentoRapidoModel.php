<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrcamentoRapidoModel extends Model
{
    protected $fillable = ['nome', 'email', 'orcamento'];
    
    protected $table = "orcamento_rapido";
}
