<?php

namespace App\Http\Controllers;

class TestController extends Controller
{
    public function index()
    {
      $item = [
         'content' =>'建物です',
      ];
        return view('index',$item);
    }
     public function func($room)
    {
      $item = [
         'content' =>'部屋番号は'.$room.'です',
      ];
        return view('index',$item);
    }
}
