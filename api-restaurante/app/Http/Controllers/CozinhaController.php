<?php

namespace App\Http\Controllers;

use App\Models\Cozinha;
use App\Services\CozinhaService;
use Illuminate\Http\Request;

class CozinhaController extends Controller
{
    private $cozinhaService;

    public function __construct(CozinhaService $cozinhaService)
    {
        $this->cozinhaService = $cozinhaService;
    }

    public function obterTodos()
    {
        return $this->cozinhaService->obterTodos();
    }

    public function obterPorId($id)
    {
        return $this->cozinhaService->obterPorId($id);
    }

    public function criar(Request $request)
    {
        return $this->cozinhaService->criar($request);
    }

    public function atualizar($id, Request $request)
    {
        return $this->cozinhaService->atualizar($id, $request);
    }

    public function excluir($id)
    {
        return $this->cozinhaService->excluir($id);
    }
}
