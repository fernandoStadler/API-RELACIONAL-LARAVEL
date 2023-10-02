<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cargos extends Model
{
    protected $fillable = [
        'nome',
    ];
    use HasFactory;

    public function funcionarios()
    {
        return $this->hasMany(Funcionarios::class);
    }
}
