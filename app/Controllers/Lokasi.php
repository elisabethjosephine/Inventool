<?php

namespace App\Controllers;

use App\Models\LokasiModel;

class Lokasi extends BaseController
{
    protected $lokasiModel;

    public function __construct()
    {
        $this->lokasiModel = new LokasiModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Daftar Lokasi',
            'lokasi' => $this->lokasiModel->getLokasi()
        ];
        return view('Lokasi/index', $data);
    }
}
