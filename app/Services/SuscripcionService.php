<?php

namespace App\Services;

use Exception;
use App\Repository\SuscripcionRepository;

class SuscripcionService
{

    protected $Repository;

    public function __construct(SuscripcionRepository $Repository)
    {
        $this->Repository = $Repository;
    }

    public function index()
    {
        return $this->Repository->all();
    }

    public function search($id)
    {
        return $this->Repository->search($id);
    }

    public function post($data)
    {
        try {
            $validate = $this->Repository->validate_unique_email($data["email"]);
            if ($validate == true) {
                throw new Exception("Email ya registrado", 500);
            }
            return $this->Repository->post($data);
        } catch (\Exception $e) {
            throw new Exception($e->getMessage(), $e->getCode());
        }
    }

    public function update($data)
    {
        try {
            $validate = $this->Repository->validate_update($data);
            return $this->Repository->update($data);
        } catch (\Exception $e) {
            throw new Exception($e->getMessage(), $e->getCode());
        }
    }

    public function delete($id)
    {
        try {
            return $this->Repository->delete($id);
        } catch (\Exception $e) {
            throw new Exception($e->getMessage(), $e->getCode());
        }
    }
}
