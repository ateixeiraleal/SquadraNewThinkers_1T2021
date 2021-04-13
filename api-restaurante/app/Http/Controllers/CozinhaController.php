<?php

namespace App\Http\Controllers;

use App\Models\Cozinha;
use Illuminate\Http\Request;

class CozinhaController extends Controller
{
    public function obterTodos()
    {
        $cozinhas = Cozinha::all();
        return response()->json($cozinhas);
    }

    public function obterPorId($id)
    {
        $cozinha = Cozinha::find($id);
        return response()->json($cozinha);
    }

    public function criar(Request $request)
    {
        Cozinha::create($request->all());
        return response()->json("Cozinha cadastrada com sucesso!");
    }

    public function atualizar(Request $request, $id)
    {
        $cozinha = Cozinha::find($id);
        $cozinha->update($request->all());
        return response()->json($cozinha);
    }

    public function excluir($id)
    {
        $cozinha = Cozinha::find($id);
        $cozinha->delete();
        return response()->json("Cozinha excluída com sucesso!");
    }
}
