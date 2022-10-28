<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('index');
    }


public function penerapan(){
    return view('/penerapan.php');

    }

public function perhitungan(){
    return view('/perhitungan.php');
}
public function studi(){
    return view('/studi.php');
}
}