<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class estado extends Model
{
    protected $table = 'estado';

    protected $fillable = [
      'id',
      'nome',

    ];

   
}
