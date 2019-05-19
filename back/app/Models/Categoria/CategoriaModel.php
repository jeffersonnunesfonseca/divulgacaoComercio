<?php

namespace App\Models\Categoria;

use Illuminate\Database\Eloquent\Model;

class CategoriaModel extends Model
{
    //
    const CREATED_AT = 'data_cadastro';
    const UPDATED_AT = 'data_atualizacao';

    protected $table = "categoria";

    //uma categoria pertence a varios anuncios
    public function anuncio()
    {
        return $this->hasMany('App\Models\Anuncio\AnuncioModel', 'id_categoria');
    }
}
