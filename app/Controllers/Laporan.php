<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Controllers\Bpnt\Subkriteria;
use App\Models\BltModel;
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

    public function getCetak($bantuan) {
        if ($bantuan == 'blt') {
            return $this->cetakBlt();
        } else if ($bantuan == 'penduduk') {
            return $this->cetakPenduduk();
        }

        throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
    }


    private function cetakBlt() {
        $data = [
            'title' => 'Laporan',
            'dataPeserta' => $this->pesertaModel->findAllPeserta(),
            'dataKriteria' => $this->kriteriaModel->where('jenis_bantuan', $this->jenisBantuan)->findAll(),
            'dataSubkriteria' => $this->subkriteriaModel->where('jenis_bantuan', $this->jenisBantuan)->findAll(),
            'url'   => $this->url,
            'jenisBantuan' => $this->jenisBantuan
        ];

        $pdf = new Dompdf;

        $html = view("/bantuan/laporan/cetakBlt", $data);

        $pdf->loadHtml($html);
        $pdf->setPaper('A4', 'potrait');
        $pdf->render();
        return $pdf->stream();
    }

    private function cetakPenduduk() {
        $data = [
            'title' => 'Laporan',
            'dataPeserta' => $this->bltModel->findAllDataBlt(),
            'dataKriteria' => $this->kriteriaModel->where('jenis_bantuan', $this->jenisBantuan)->findAll(),
            'dataSubkriteria' => $this->subkriteriaModel->where('jenis_bantuan', $this->jenisBantuan)->findAll(),
            'url'   => $this->url,
            'jenisBantuan' => $this->jenisBantuan
        ];

        $pdf = new Dompdf;

        $html = view("/bantuan/laporan/cetakPenduduk", $data);

        $pdf->loadHtml($html);
        $pdf->setPaper('A4', 'potrait');
        $pdf->render();
        return $pdf->stream();
    }
}
