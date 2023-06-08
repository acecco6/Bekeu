<?php

namespace App\Services;
use App\Repository\EstadoRepository;

class EstadoService{

    protected $Repository;

    public function __construct(EstadoRepository $Repository)
    {
        $this->Repository = $Repository;
    }

    public function index()
    {
        return $this->Repository->getAll();
    }

}
