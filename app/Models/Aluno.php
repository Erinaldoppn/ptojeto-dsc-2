<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'email', 'curso_id'];

    // Relacionamento com o Curso (se aplicável)
    public function curso()
    {
        return $this->belongsTo(Curso::class);
    }
}
