<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PendudukModel;
use CodeIgniter\API\ResponseTrait;

class Penduduk extends BaseController {
    use ResponseTrait;
    private $url = 'penduduk';

    public function __construct() {
        $this->pendudukModel = new PendudukModel();
    }

    public function index() {


        $data = [
            'title' => 'Data Penduduk',
            'url'   => $this->url
        ];

        return view('penduduk/index', $data);
    }

    public function table() {
        $data = [
            'title' => 'Data Penduduk',
            'url'   => $this->url,
            'pendudukData' => $this->pendudukModel->findAll(),
        ];

        return view('/penduduk/table', $data);
    }

    public function tambah() {
        $data = [
            'title' => 'Tambah Data Penduduk',
            'url'   => $this->url
        ];

        return view('/penduduk/tambah', $data);
    }

    public function edit($id) {
        $data = [
            'title' => 'Edit Data Penduduk',
            'penduduk'  => $this->pendudukModel->find($id),
            'url'   => $this->url
        ];

        return $this->respond(view('/penduduk/edit', $data), 200);
    }

    public function detail($id) {
        $data = [
            'title' => 'Detail Data Penduduk',
            'penduduk'  => $this->pendudukModel->find($id),
            'url'   => $this->url
        ];

        return $this->respond(view('/penduduk/detail', $data), 200);
    }

    public function add() {
        $data = $this->request->getPost();
        $this->pendudukModel->save($data);

        $res = [
            'status' => 'success',
            'msg'   => 'Data User Berhasil Ditambahkan.',
            'data'  => $data
        ];

        return $this->respond($res, 200);
    }

    public function save($id) {
        $data = $this->request->getVar();
        // dd($data);
        $this->pendudukModel->update($id, $data);

        $res = [
            'status' => 'success',
            'msg'   => 'Data User Berhasil Diupdate.',
            'data'  => $data
        ];

        return $this->respond($res, 200);
    }


    public function delete($id) {

        $this->pendudukModel->delete($id);

        $res = [
            'status'    => 'success',
            'msg'     => 'Data berhasil dihapus.',
        ];

        return $this->respond($res, 200);
    }
}
