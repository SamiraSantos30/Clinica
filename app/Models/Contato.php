<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    use HasFactory;

    protected $table = 'contato';

    protected $fillable = [
        'nome_contato',
        'email_contato',
        'data_contato',
        'departamento_contato',
        'tel_contato',
        'mensagem_contato',
    ];
    
}

