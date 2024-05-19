<?php

namespace App\Controllers;

use App\Models\KamusModel;

class User extends BaseController
{
    protected $kamusModel;

    public function __construct()
    {
        $this->kamusModel = new KamusModel();
    }

    public $data = [
        'title' => 'Judul Website',
        'kamus' => '',
        'baris' => 0
    ];

    public function index()
    {
        $data['title'] = 'ENSHI';
        if (isset($_POST['cari'])) {
            $c = $_POST['c'];
            $kamus = $this->kamusModel->cariIstilah('dictionary', 'term', "$c");
            $results = $kamus->getResultArray();
            $data['kamus'] = $results;
            $data['baris'] = $kamus->getNumRows();
        }
        echo view('layout/header', $data);
        echo view('index', $data);
        echo view('layout/footer');
    }

    public function kamus()
    {

        $data['title'] = 'Kamus Hukum Adat';
        echo view('layout/header', $data);
        $kamus = $this->kamusModel->findAll();
        $data['kamus'] = $kamus;
        echo view('kamus', $data);
        echo view('layout/footer');
    }

    public function sha()
    {
        $data['title'] = 'Seputar Hukum Adat Indonesia';
        echo view('layout/header', $data);
        echo view('sha');
        echo view('layout/footer');
    }

    public function peta()
    {
        $data['title'] = 'Peta Hukum Adat Indonesia';
        echo view('layout/header', $data);
        echo view('peta');
        echo view('layout/footer');
    }
}
