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

}
