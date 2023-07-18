<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ibges extends Model
{
    use HasFactory;

    protected $fillable = [
        'descricacao_do_alimento',
        'Categoria'
    ];
    protected $casts = [
        'status' => 'boolean'
    ];

    protected $table = 'ibges';
}
