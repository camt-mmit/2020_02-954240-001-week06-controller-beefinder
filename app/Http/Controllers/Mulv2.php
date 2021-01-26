<?php

namespace App\Http\Controllers;
use Psr\Http\Message\ServerRequestInterface;

class Mulv2 extends Controller
{
    private $title = 'Multiplication Table';

    function form() {
        return view('mulv2-form',[
            'title'=>"$this->title : V2 Form",
        ]);
    }

    function result(ServerRequestInterface $request) {
        $data = $request->getParsedBody(); 
        $root_number = (double)$data['root_number'];

        if( !empty($data['header']) )
           $check = $data['header'];
        else 
           $check = [];

        return view('mulv2-result',[
        'title'=>"$this->title : V2 result",
        'root_number'=>$root_number,
        'check'=>$check,
        ]); 
    }
}
