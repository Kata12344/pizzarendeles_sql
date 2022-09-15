<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rendeles extends Model
{
    use HasFactory;
    protected $fillable = [
        'rendeles_id',
        'pizza_id',
        'hány',
        'users_id',
        'fizetési mód'
    ];
}
