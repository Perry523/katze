<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lente extends Model
{
    public $fillable = ['codigo', 'marca','nome','preco','desconto','categoria','fretegratis','ativo','destaque','info'];
}
