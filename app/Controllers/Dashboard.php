<?php

namespace App\Controllers;

use App\Controllers\BaseController;



class Dashboard extends BaseController {
    public function index() {
        $data = [
            "title" => 'Halaman Dashboard',
            "url"   => "home"
        ];
        return view('/dashboard/index', $data);
    }
}
