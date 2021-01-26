<?php

namespace App\Http\Controllers;
use Psr\Http\Message\ServerRequestInterface;

class Mul extends Controller
{
    private $title = 'Multiplication Table';

    function form() {
        return view('mul-form',[
            'title'=>"$this->title : Form",
        ]);
    }
    function result(ServerRequestInterface $request) {
        $data = $request->getParsedBody(); 
        $root_number = (double)$data['root_number'];
        return view('mul-result',[
        'title'=>"$this->title : result",
        'root_number'=>$root_number
        ]); 
    }
}
