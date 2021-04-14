<?php


namespace App\Repositories;


use Illuminate\Http\Request;

interface ICozinhaRepository
{
    public function obterTodos();
    public function obterPorId($id);
    public function criar(Request $request);
    public function atualizar($id, Request $request);
    public function excluir($id);

}
