<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Confirmados;
use  App\Models\Estado;

class ConfirmadosController extends Controller
{
    public function getCasosConfirmados()
    {
        $confirmados= Confirmados::all();
        //dd(confirmados)        
            $totalCasos = $confirmados->sum('casos');
            echo "Casos Confirmados" .$totalCasos;

    }

    
    public function getCasosConfirmadosDesglosados(){
        $estados = Estados::find($idEstado);
        $totalCasos = 0;
        foreach($estados as $estado)
        echo "Casos confirmados de " .$estado->nombre.":".$totalCasos;
        
        {
            $casosE = $estado->confirmados->sum('casos');
            $totalCasos += $casosE; 
            echo "Casos confirmados en el estado:" .$total;

        }
        echo "Casos confirmados totales:" .$total;
    }

    public function index(){
        self::getCasosConfirmados();

    }

    public function show($idEstado){
        self::getCasosConfirmadosEstado($idEstado);
    }

}
