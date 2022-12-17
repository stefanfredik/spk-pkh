<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KriteriaModel;
use App\Models\MyUserModel;
use App\Models\PendudukModel;
use App\Models\PesertaModel;

class Dashboard extends BaseController {
    public function __construct() {
        $this->userModel = new MyUserModel();
        $this->pendudukModel = new PendudukModel();
        $this->pesertaModel = new PesertaModel();
    }

    public function index() {
        $data = [
            "title" => 'Halaman Dashboard',
            "url"   => "home",
            'jumUser' => $this->userModel->countAll(),
            'jumPenduduk' => $this->pendudukModel->countAll(),
            'jumPeserta' => $this->pesertaModel->countAll(),
        ];

        return view('/dashboard/index', $data);
    }
}
