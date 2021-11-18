<?php

namespace App\Controllers;

use App\Models\BarangMasukModel;

class Barangmasuk extends BaseController
{
    public function __construct()
    {
        $this->barangMasukModel = new BarangMasukModel();
    }

    public function index()
    {

        $data = [
            'title' => 'Daftar Barang Masuk',
            'barang_masuk' => $this->barangMasukModel->getBarangMasuk()
        ];

        return view('BarangMasuk/index', $data);
    }

    public function save()
    {
        $id_barang = $this->request->getVar('id_barang');
        $jml_masuk = $this->request->getVar('jml_masuk');
        $supplier = $this->request->getVar('supplier');

        $this->barangMasukModel->tambahBarangMasuk($id_barang, $jml_masuk, $supplier);

        return redirect()->to('/barangmasuk')->with('msg', 'Berhasil Ditambahkan');
    }
}
