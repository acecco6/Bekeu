<?php

namespace App\Http\Controllers\Views;

use Exception;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use App\Services\EstadoService;
use App\Http\Controllers\Controller;
use App\Services\SuscripcionService;
use App\Http\Requests\SuscripcionRequest;
use App\Http\Requests\SuscripcionUpdateRequest;



class SuscripcionController extends Controller
{
    protected $EstadoService;
    protected $SuscripcionService;

    public function __construct(EstadoService $EstadoService, SuscripcionService $SuscripcionService)
    {
        $this->EstadoService = $EstadoService;
        $this->SuscripcionService = $SuscripcionService;
    }

    public function index()
    {
        $suscripciones = $this->SuscripcionService->index();
        return view("Suscripcion.index", compact('suscripciones'));
    }

    public function create()
    {
        $states = $this->EstadoService->index();
        return view("Suscripcion.create", compact('states'));
    }

    public function post(SuscripcionRequest $request)
    {
        try {
            $data = $this->SuscripcionService->post($request->all());
            return redirect()->back()->with(["success"=>true]);
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }


    public function show($id)
    {
        try {
            $states = $this->EstadoService->index();
            $data = $this->SuscripcionService->search($id);
            return view("Suscripcion.show", compact("states","data"));
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function update(SuscripcionUpdateRequest $request)
    {
        try {
            $data = $this->SuscripcionService->update($request->all());
            return redirect()->back()->with(["success"=>true]);
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function delete($id)
    {
        try {
            $data = $this->SuscripcionService->delete($id);
            return redirect()->back()->with(["success"=>true]);
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

}
