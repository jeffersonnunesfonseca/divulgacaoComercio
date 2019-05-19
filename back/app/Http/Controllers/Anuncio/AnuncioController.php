<?php

namespace App\Http\Controllers\Anuncio;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Anuncio\AnuncioModel;

class AnuncioController extends Controller
{
    //
    public function index(){
        $res = AnuncioModel::with('cliente')->get()->toarray();
        echo "<pre>";
        print_r($res);
    }
}
