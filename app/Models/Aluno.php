<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Aluno extends Model
{
    use HasFactory, softDeletes;

    protected $fillable = ['nome', 'email', 'telefone'];

    // Relacionamento com o Curso (se aplicável)
    public function Aluno()
    {
        return $this->belongsTo(Aluno::class);
    }
}
