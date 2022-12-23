<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KriteriaModel;
use App\Models\PendudukModel;
use App\Models\PesertaModel;
use App\Models\SubkriteriaModel;

class Keputusan extends BaseController {
    private $url = 'keputusan';
    private $totalNilaiKriteria;

    public function __construct() {
        $this->kriteriaModel = new KriteriaModel();
        $this->pendudukModel = new PendudukModel();
        $this->subkriteriaModel = new SubkriteriaModel();
        $this->pesertaModel = new PesertaModel();

        $this->jumlahKriteria = $this->kriteriaModel->countAllResults();
    }

    public function index() {
        $this->totalNilaiKriteria = $this->kriteriaModel->selectSum('nilai')->first()['nilai'];
        $data = [
            'title' => 'Keputusan PKH',
            'dataKriteria' => $this->kriteriaModel->findAll(),
            'totalNilaiKriteria' => $this->totalNilaiKriteria,
            'dataPeserta' => $this->pesertaModel->findAllPeserta(),
            'dataSubkriteria' => $this->subkriteriaModel->findAll(),
        ];
        return view('/keputusan/index', $data);
    }
}
