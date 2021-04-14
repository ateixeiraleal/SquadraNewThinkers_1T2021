<?php


namespace App\Repositories;


use App\Models\Cozinha;
use Illuminate\Http\Request;

class CozinhaRepositoryEloquent implements ICozinhaRepository
{
    private $model;

    public function __construct(Cozinha $cozinha)
    {
        $this->model = $cozinha;
    }

    public function obterTodos()
    {
        return $this->model->all();
    }

    public function obterPorId($id)
    {
        return $this->model->find($id);
    }

    public function criar(Request $request)
    {
        return $this->model->create($request->all());
    }

    public function atualizar($id, Request $request)
    {
        $cozinha = $this->model->find($id);
        $cozinha->update($request->all());
        return $cozinha;
    }

    public function excluir($id)
    {
        return $this->model->find($id)->delete();
    }
}
