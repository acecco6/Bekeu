<?php

namespace App\Repository;
use App\Models\Estado;

class EstadoRepository {

    protected $model=Estado::class;

    public function getAll()
    {
        return $this->model::all();
    }
}
