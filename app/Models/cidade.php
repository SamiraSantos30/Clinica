<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class cidade extends Model
{
    protected $table = 'cidade';

    protected $fillable = [
      'id',
      'nome',
      'estado_id',

    ];

    public function estado(): BelongsTo
    {
        return $this->belongsTo(estado::class,'id_estado', 'id_estado');
    }
}
