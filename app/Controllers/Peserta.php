<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KriteriaModel;
use App\Models\PendudukModel;
use App\Models\PesertaModel;
use App\Models\SubkriteriaModel;
use CodeIgniter\API\ResponseTrait;

class Peserta extends BaseController {
    use ResponseTrait;

    private $url = 'peserta';
    private $title = 'Data Peserta';
    private $jumlahKriteria = 0;
    private $jenisBantuan = 'blt';

    public function __construct() {
        $this->kriteriaModel = new KriteriaModel();
        $this->pendudukModel = new PendudukModel();
        $this->subkriteriaModel = new SubkriteriaModel();
        $this->pesertaModel = new PesertaModel();
        $this->jumlahKriteria = $this->kriteriaModel->countAllResults();
    }

    public function index() {
        $data = [
            'url' => $this->url,
            'title' => 'Data Peserta'
        ];

        return view('/peserta/index', $data);
    }

    public function tambah() {
        $data = [
            'title' => 'Tambah Data Peserta',
            'url'   => $this->url,
            'dataPenduduk' => $this->pendudukModel->findAllNonBantuan(),
            'dataKriteria' => $this->kriteriaModel->findAll(),
            'dataSubkriteria' => $this->subkriteriaModel->findAll(),
        ];

        return view('/peserta/tambah', $data);
    }

    public function table() {
        $data = [
            'title' => 'Data Peserta',
            'url'   => $this->url,
            'dataKriteria' => $this->kriteriaModel->findAll(),
            'dataPenduduk' => $this->pendudukModel->findAll(),
            'dataPeserta' => $this->pesertaModel->findAllPeserta(),
        ];

        return view('/peserta/table', $data);
    }

    public function edit($id) {

        $data = [
            'title' => 'Edit Data Peserta',
            'dataKriteria'  => $this->kriteriaModel->findAll(),
            'dataSubkriteria' => $this->subkriteriaModel->findAll(),
            'dataPenduduk' => $this->pendudukModel->findAll(),
            'peserta' => $this->pesertaModel->find($id),
            'url'   => $this->url
        ];

        return $this->respond(view('/peserta/edit', $data), 200);
    }

    public function detail($id) {

        $data = [

            'dataKriteria'  => $this->kriteriaModel->findAll(),
            'dataSubkriteria' => $this->subkriteriaModel->findAll(),
            'dataPenduduk' => $this->pendudukModel->findAll(),
            'peserta' => $this->pesertaModel->findPeserta($id),
            'url'   => $this->url
        ];

        $data['title'] = 'Detail ' . $data['peserta']['nama_lengkap'];

        return $this->respond(view('/peserta/detail', $data), 200);
    }

    public function add() {
        $data = $this->request->getPost();
        $this->pesertaModel->save($data);

        $res = [
            'status' => 'success',
            'msg'   => 'Data Kriteria Berhasil Ditambahkan.',
            'data'  => $data
        ];

        return $this->respond($res, 200);
    }


    public function save($id) {
        $data = $this->request->getPost();
        $this->pesertaModel->update($id, $data);

        $res = [
            'status' => 'success',
            'msg'   => 'Data User Berhasil Diupdate.',
            'data'  => $data
        ];

        return $this->respond($res, 200);
    }



    public function delete($id) {

        $this->pesertaModel->delete($id);

        $res = [
            'status'    => 'success',
            'msg'     => 'Data berhasil dihapus.',
        ];

        return $this->respond($res, 200);
    }
}
