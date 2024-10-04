<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class endereco extends Model
{
    protected $table = 'endereco';

    protected $fillable = [
      'id',
      'rua',
      'numero',
      'complemento',
      'bairro',
      'cep',
      'cidade_id',
    ];

    public function cidade(): BelongsTo
    {
        return $this->belongsTo(estado::class,'id_cidade', 'id_cidade');
    }
}
