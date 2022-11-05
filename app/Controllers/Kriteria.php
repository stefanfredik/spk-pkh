<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KriteriaModel;
use App\Models\PesertaModel;
use CodeIgniter\API\ResponseTrait;

class Kriteria extends BaseController {
    use ResponseTrait;

    private $url = 'kriteria';
    private $dir = 'blt';
    private $table = 'kriteria';

    public function __construct() {
        $this->kriteriaModel = new KriteriaModel();
        $this->pesertaModel = new PesertaModel();
        $this->forge = \Config\Database::forge();
    }

    public function index() {
        $data = [
            'url' => $this->url,
            'table' => $this->table,
            'title' => 'Data Kriteria'
        ];

        return view('/kriteria/index', $data);
    }

    public function tambah() {
        $data = [
            'title' => 'Tambah Data Kriteria',
            'url'   => $this->url
        ];

        return view('/kriteria/tambah', $data);
    }

    public function table() {
        $data = [
            'title' => 'Data Kriteria',
            'url'   => $this->url,
            'table' => $this->table,
            'dataKriteria' => $this->kriteriaModel->findAll(),
        ];

        return view('/kriteria/table', $data);
    }

    public function edit($id) {
        $data = [
            'title' => 'Edit Data Penduduk',
            'kriteria'  => $this->kriteriaModel->find($id),
            'url'   => $this->url
        ];

        return $this->respond(view('/kriteria/edit', $data), 200);
    }

    public function add() {
        $data = $this->request->getPost();
        $this->kriteriaModel->save($data);

        $result = $this->kriteriaModel->orderBy('id', 'desc')->first();
        $column = 'k_' . $result['id'];

        $field = [
            $column => [
                'type' => 'INT'
            ]
        ];

        $this->forge->addColumn('peserta', $field);

        $res = [
            'status' => 'success',
            'msg'   => 'Data Kriteria Berhasil Ditambahkan.',
            'data'  => $data
        ];

        return $this->respond($res, 200);
    }


    public function save($id) {
        $data = $this->request->getPost();
        $this->kriteriaModel->update($id, $data);

        $res = [
            'status' => 'success',
            'msg'   => 'Data User Berhasil Diupdate.',
            'data'  => $data
        ];

        return $this->respond($res, 200);
    }



    public function delete($id) {
        $this->kriteriaModel->delete($id);

        $column = "k_" . $id;
        $this->forge->dropColumn('peserta', $column);

        $res = [
            'status'    => 'success',
            'msg'     => 'Data berhasil dihapus.',
        ];

        return $this->respond($res, 200);
    }
}
