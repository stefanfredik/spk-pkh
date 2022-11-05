<?php

namespace App\Controllers;

use App\Controllers\BaseController;



class Home extends BaseController
{
    public function index()
    {
        $data = [
            "title" => 'Halaman Home',
            "url"   => "home"
        ];
        return view('/home/index');
    }
}
