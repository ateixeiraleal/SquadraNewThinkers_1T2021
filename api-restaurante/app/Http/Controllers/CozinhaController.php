<?php

namespace App\Http\Controllers;

use App\Models\Cozinha;

class CozinhaController extends Controller
{
    public function obterTodas()
    {
        $cozinhas = Cozinha::all();
        return $cozinhas;
    }
}
