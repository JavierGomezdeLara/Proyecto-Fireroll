<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    use HasFactory;

    protected $table = 'usuarios';

    protected $fillable = [
        'username',
        'password',
        'email',
        'type',
        'address',
        'cp',
        'age',
        'location',
        'country',
        'icon',
        'banner',
        'iconousado',
        'bannerusado',
        'bio',
        'games',
        'preferences'
    ];
}
