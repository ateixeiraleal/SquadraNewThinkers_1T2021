<?php

namespace App\Services;

use App\Repositories\ICozinhaRepository;
use Illuminate\Http\Request;

class CozinhaService
{
    private $cozinhaRepository;

    public function __construct(ICozinhaRepository $cozinhaRepository)
    {
        $this->cozinhaRepository = $cozinhaRepository;
    }

    public function obterTodos()
    {
        $cozinhas = $this->cozinhaRepository->obterTodos();
        return response()->json($cozinhas);
    }

    public function obterPorId($id)
    {
        $cozinha = $this->cozinhaRepository->obterPorId($id);
        return response()->json($cozinha);
    }

    public function criar(Request $request)
    {
        $this->cozinhaRepository->criar($request);
        return response()->json("Cozinha cadastrada com sucesso!");
    }

    public function atualizar($id, Request $request)
    {
        $cozinha = $this->cozinhaRepository->atualizar($id, $request);
        return response()->json($cozinha);
    }

    public function excluir($id)
    {
        $this->cozinhaRepository->excluir($id);
        return response()->json("Cozinha excluída com sucesso!");
    }
}
