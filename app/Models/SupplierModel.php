<?php

namespace App\Models;

use CodeIgniter\Model;

class SupplierModel extends Model
{
    protected $table = 'supplier';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama_supplier', 'alamat_supplier', 'telp_supplier'];

    public function getSupplier($id_supplier = false)
    {
        if ($id_supplier == false) {
            return $this->findAll();
        }

        return $this->where(['id_supplier' => $id_supplier])->first();
    }
}
