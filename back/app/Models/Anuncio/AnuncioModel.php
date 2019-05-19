<?php

namespace App\Models\Anuncio;

use Illuminate\Database\Eloquent\Model;

class AnuncioModel extends Model
{
    //
    const CREATED_AT = 'data_cadastro';
    const UPDATED_AT = 'data_atualizacao';

    protected $table = "anuncio";

    // um anuncio pertence a um cliente
    public function cliente()
    {
        return $this->belongsTo('App\Models\Cliente\ClienteModel', 'id_cliente');
    }

    // um anuncio pertence a uma categoria
    public function categoria()
    {
        return $this->belongsTo('App\Models\Categoria\CategoriaModel', 'id_categoria');
    }


    // um anuncio tem varias fotos
    public function foto()
    {
        return $this->hasMany('App\Models\Anuncio_foto\AnuncioFotoModel', 'id_anuncio');
    }
}
