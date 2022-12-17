<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Controllers\Bpnt\Subkriteria;
use App\Models\KriteriaModel;
use App\Models\PendudukModel;
use App\Models\PesertaModel;
use App\Models\SubkriteriaModel;
use CodeIgniter\API\ResponseTrait;
use Dompdf\Dompdf;

class Laporan extends BaseController {
    use ResponseTrait;

    private $url = 'laporan';
    private $title = 'Data Peserta Bntp';
    private $jumlahKriteria = 0;


    public function __construct() {
        $this->pesertaModel  = new PesertaModel();
        $this->kriteriaModel = new KriteriaModel();
        $this->subkriteriaModel = new SubkriteriaModel();
        $this->pendudukModel = new PendudukModel();
    }

    public function laporanPeserta() {
        $data = [
            'title' => 'Data Laporan Peserta',
            'dataPeserta' => $this->pesertaModel->findAllPeserta(),
            'dataKriteria' => $this->kriteriaModel->findAll(),
            'dataSubkriteria' => $this->subkriteriaModel->findAll(),
            'url'   => $this->url,
        ];

        return view('laporan/peserta/index', $data);
    }


    public function laporanPenduduk() {
        $data = [
            'title' => 'Data Laporan Penduduk',
            'dataPenduduk' => $this->pendudukModel->findAll(),
            'url'   => $this->url,
            'dataKriteria' => $this->kriteriaModel->findAll(),
        ];

        return view('laporan/penduduk/index', $data);
    }

    public function cetakPeserta() {
        $data = [
            'title' => 'Data Laporan Peserta',
            'dataPeserta' => $this->pesertaModel->findAllPeserta(),
            'dataKriteria' => $this->kriteriaModel->findAll(),
            'dataSubkriteria' => $this->subkriteriaModel->findAll(),
        ];

        $pdf = new Dompdf();

        $html = view("/laporan/peserta/cetak", $data);

        $pdf->loadHtml($html);
        $pdf->setPaper('A4', 'landscape');
        $pdf->render();
        return $pdf->stream();
    }

    public function cetakPenduduk() {
        $data = [
            'title' => 'Data Laporan Penduduk',
            'dataPenduduk' => $this->pendudukModel->findAll(),
            'dataKriteria' => $this->kriteriaModel->findAll(),
        ];

        $pdf = new Dompdf;
        $html = view("/laporan/penduduk/cetak", $data);
        $pdf->loadHtml($html);
        $pdf->setPaper('A4', 'landscape');
        $pdf->render();
        return $pdf->stream();
    }
}
