<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Estado;


class EstadoController extends Controller
{
    public function show(string $id): View
    {

        foreach (Estado::all() as $estado) {
            echo $estado->name;
    }

    dd(estado::find($id));
    }

    public function index(){
        return view('estados.index');

    }

    public function getEstados(){
        return response()->json(Estado::get());
    }



}