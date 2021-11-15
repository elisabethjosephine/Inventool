<?php

namespace App\Controllers;

use App\Models\SupplierModel;

class Supplier extends BaseController
{
    protected $supplierModel;

    public function __construct()
    {
        $this->supplierModel = new SupplierModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Daftar Supplier',
            'supplier' => $this->supplierModel->getSupplier()
        ];
        return view('Supplier/index', $data);
    }

    public function detail($id_supplier)
    {
        $data = [
            'title' => 'Detail Supplier',
            'supplier' => $this->supplierModel->getSupplier($id_supplier)
        ];

        return view('Supplier/detail', $data);
    }

    public function delete($id_supplier)
    {
    }
}
