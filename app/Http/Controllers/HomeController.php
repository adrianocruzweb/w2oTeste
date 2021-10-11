<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use JSON;

class HomeController extends Controller
{

    public function json(){

        $i=0;
        $arrayNumbers = array();
        $arrayPares = array();

        while($i<1000){
            array_push($arrayNumbers,$i);
            $i++;
        }

        foreach($arrayNumbers as $num){
            if($num % 2 == 0){
                array_push($arrayPares, $num);
            }
        }

        $jsonCompleto = json_encode($arrayNumbers);
        $jsonPares = json_encode($arrayPares);

        return view('json' ,['json'=>$jsonCompleto, 'pares'=>$jsonPares]);
    }

    public function selecionaPrimos($valor){
        $n = $valor;

        for($count=2; $count<$n; $count++){
            if($n % $count == 0){
                return $valor;
            }
        }

    }

    public function primos(){

        $i=0;
        $arrayNumbers = array();
        $arrayPrimos = array();

        while($i<100){
            array_push($arrayNumbers,$i);
            $i++;
        }

        foreach($arrayNumbers as $an){
            array_push($jsonPrimos,HomeController::selecionaPrimos($an));
        }

        $jsonCompleto = json_encode($arrayNumbers);
        $jsonPrimos = json_encode($arrayPrimos);

        return view('primos' ,['json'=>$jsonCompleto, 'primos'=>$jsonPrimos]);
    }

}
