<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    protected $table = 'cursos';
    protected $primaryKey = 'curso_id';

    protected $fillable = [
        'nome_curso',
        'sigla',
        'area_formacao_id',
        'professor_id',
        'created_at',
        'updated_at'
    ];

    public function coordenador(){
        return $this->hasOne(Professor::class, 'professor_id', 'curso_id');
    }

    public function areaFormacao(){
        return $this->hasOne(Area_formacao::class, 'professor_id', 'curso_id');
    }
    
    public function Candidato()
    {
        return $this->belongsToMany(Candidato::class, 'candidato_seleciona_curso', 'curso_id', 'candidato_id');
    }

    public function turma()
    {
        return $this->hasMany(Turma::class, 'curso_id', 'turma_id');
    }
}
