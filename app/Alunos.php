<?php
 
namespace Unesc;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    protected $fillable = [
        'nome',
        'curso',
        'email',
        'endereco'
    ];

}

