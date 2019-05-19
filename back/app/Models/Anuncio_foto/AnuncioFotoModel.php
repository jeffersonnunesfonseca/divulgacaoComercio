<?php

namespace App\Models\Anuncio_foto;

use Illuminate\Database\Eloquent\Model;

class AnuncioFotoModel extends Model
{
    //
    const CREATED_AT = 'data_cadastro';
    const UPDATED_AT = 'data_atualizacao';

    protected $table = "anuncio_foto";

    // uma foto pertente a um anuncio
    public function foto()
    {
        return $this->belongsTo('App\Models\Anuncio\AnuncioModel', 'id_anuncio');
    }
}
