<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    // Definindo Campos que podem ser preenchidos
    protected $fillable = [
        'subject',
        'message',
        'status',
    ];
}
