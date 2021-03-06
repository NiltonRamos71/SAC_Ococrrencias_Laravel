<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'categorias';
    // protected $primaryKey = 'id_categoria';

    protected $fillable = [
        'descricao', 
        'divisao_id', 
        'ativo',
        'ordem']; 
}
