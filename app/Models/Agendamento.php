<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agendamento extends Model
{
    use HasFactory;

    protected $table = 'agendamento'; // Tabela no singular
    
    protected $fillable = [
        'paciente_id',
        'medico_id',
        'data_agendamento',
        'descricao',
    ];
}

