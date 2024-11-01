<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
<<<<<<< HEAD
=======
    /** @use HasFactory<\Database\Factories\UserFactory> */
>>>>>>> 3b20195 (Clinica)
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
<<<<<<< HEAD
     * @var array<int, 
=======
     *
     * @var array<int, string>
>>>>>>> 3b20195 (Clinica)
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
<<<<<<< HEAD

=======
     *
>>>>>>> 3b20195 (Clinica)
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
<<<<<<< HEAD
     
=======
     *
>>>>>>> 3b20195 (Clinica)
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
