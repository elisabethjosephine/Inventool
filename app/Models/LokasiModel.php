<?php

namespace App\Models;

use CodeIgniter\Model;

class LokasiModel extends Model
{
    protected $table = 'lokasi';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama_lokasi', 'penanggung_jawab', 'keterangan'];

    public function getLokasi($id_lokasi = false)
    {
        if ($id_lokasi == false) {
            return $this->findAll();
        }

        return $this->where(['id_lokasi' => $id_lokasi])->first();
    }
}
