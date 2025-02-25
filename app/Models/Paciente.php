<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;

    protected $table = 'paciente';

    protected $fillable = [
        'nome',
        'data_nascimento',
        'telefone',
        'endereco_id',
        'mensagem',
    ];


public function Paciente()
{
    return $this->belongsTo(Paciente::class, 'endereco_id');
}
}