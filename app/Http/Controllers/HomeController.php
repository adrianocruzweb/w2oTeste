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

        $primos = array();
        $index=0;
        while($index<101){
            for($count=2; $count<$index; $count++){
                if(($index % $count) == 0 && !array_search($index,$primos)){
                    array_push($primos, $index);
                }
            }
            $index++;
        }

        $jsonPrimos = json_encode($primos);

        return view('primos' ,['primos'=>$jsonPrimos]);
    }

}
