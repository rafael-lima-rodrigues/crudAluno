<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alunos extends Model
{
    
    protected $fillable = [
        'id', 'nome', 'disciplina','data_matricula', 'nota'];
    
        public $timestamps = false;
}
