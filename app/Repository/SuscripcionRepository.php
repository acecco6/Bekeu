<?php

namespace App\Repository;

use Exception;
use App\Models\Suscripcion;


class SuscripcionRepository
{

    protected $model = Suscripcion::class;

    public function validate_unique_email($email)
    {
        $validate = $this->model::select()
            ->where('email', $email)
            ->exists();
        return $validate;
    }

    public function all()
    {
        return $this->model::select("suscripciones.id", "suscripciones.email", "estados.name")
            ->join('estados', "estados.id", "=", "estado_id")
            ->get();
    }

    public function search($id)
    {
        return $this->model::select("suscripciones.id", "suscripciones.email", "estados.name")
            ->join('estados', "estados.id", "=", "estado_id")
            ->where("suscripciones.id", $id)
            ->get()->first();
    }

    public function post($data)
    {
        return $this->model::create($data);
    }

    public function validate_update($data)
    {
        $validate = $this->model::select()
            ->where('id', $data["id"])
            ->get()->first();

        if ($validate["email"] != $data["email"]) {
            $validate_email = $this->validate_unique_email($data["email"]);
        }

        if (isset($validate_email) && $validate_email == true) {
            throw new Exception("Email ya registrado", 500);
        }

        return $validate;
    }

    public function update($data)
    {
        $item = $this->model::select()
            ->where('id', $data["id"])
            ->get()->first();

        $item->email = $data["email"];
        $item->estado_id = $data["estado_id"];


        $item->save();

        return true;
    }

    public function delete($id)
    {
        $suscripcion = $this->model::findOrFail($id);
        $suscripcion->delete();
        return true;
    }
}
