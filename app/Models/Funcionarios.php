<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funcionarios extends Model
{

    protected $fillable = [
        'nome',
        'matricula',
        'foto',
        'status',
        'cargos_id'
    ];
    use HasFactory;
    

    public function cargos()
    {
        return $this->belongsTo(Cargos::class);
    }
}
