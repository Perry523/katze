<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    public $fillable = ['nome', 'email','senha','cpf','dma'];
}
