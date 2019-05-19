<?php

namespace App\Models\Cliente;

use Illuminate\Database\Eloquent\Model;

class ClienteModel extends Model
{
    //
    const CREATED_AT = 'data_cadastro';
    const UPDATED_AT = 'data_atualizacao';

    protected $table = "cliente";

    // um cliente possui varios anuncios
    public function anuncio()
    {
        return $this->hasMany('App\Models\Anuncio\AnuncioModel', 'id_cliente');
    }
}
