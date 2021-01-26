<?php

namespace App\Http\Controllers;
use Psr\Http\Message\ServerRequestInterface;

class Area extends Controller
{
    private $title = 'Area';

    function form() {
        return view('area-form',[
            'title'=>"$this->title : Form",
        ]);
    }
    function result(ServerRequestInterface $request) {
        $data = $request-> getParsedBody();
        $type = (double)$data['type'];
        $width =(double)$data['width'];
        $height=(double)$data['height'];
        $area=$type*$width*$height;
        if ($type=='1'){
            $typeName= 'Rectangular';
        }
        else{
            $typeName= 'Triangle';
        }
        return view('area-result',[
            'title'=>"$this->title : result",
            'typeName'=>$typeName,
            'width'=>$width,
            'height'=>$height,
            'area'=>$area,
            ]);
        }
}