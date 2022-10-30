<?php

namespace App\Controllers;

use App\Controllers\BaseController;



class Home extends BaseController
{
    public function Index()
    {
        return view('/home/index');
    }
}
