<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BarangModel;

class BarangController extends BaseController
{
    protected $id_barang;

    protected $barangmodel;
    public function __construct()
    {
        $this->barangmodel = new BarangModel();
    }
    public function index()
    {
        //tampilkan data barang
        $list = $this->barangmodel
            ->join('stok s', 's.id_barang=barang.id_barang', 'left')
            ->findAll();
        $data = [
            'list'  => $list,
            'title' => 'Daftar Barang'
        ];
        //parsing data dan tampilkan view
        return view('barang/list', $data);
    }
    public function tambah_post()
    {
        $data_post = [
            'nama_barang'   => $this->request->getVar('nama_barang'),
            'spesifikasi'   => $this->request->getVar('spesifikasi'),
            'lokasi'        => $this->request->getVar('lokasi'),
            'kondisi'       => $this->request->getVar('kondisi'),
            'jumlah_barang' => $this->request->getVar('jumlah_barang'),
            'sumber_dana'   => $this->request->getVar('sumber_dana')
        ];
        $save = $this->barangmodel->save($data_post);
        if ($save) {
            //Input data berhasil
            return redirect()->to('/barang');
        } else {
            //Input data gagal
            echo "Data Gagal ditambah";
        }
    }
    public function tambah_get()
    {
        $data = [
            'title' => 'Tambah Data Barang'
        ];
        //menampilkan form tambah barang
        return view('barang/tambahbarang', $data);
    }
    public function hapus()
    {
    }
}
