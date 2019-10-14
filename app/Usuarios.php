<?php
 
namespace Unesc;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $fillable = [
        'nome',
        'telefone',
        'email',
        'endereco'
    ];

}

