<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelMahasiswa extends Model
{
    protected $table  = 'tb_mahasiswa';
    protected $primaryKey = 'NIM';
    protected $allowedFields = ['NIM', 'Nama', 'Kota_Asal', 'Tanggal_Lahir', 'Nama_Ortu', 'Alamat_Ortu', 'Kode_Pos', 'NoTelp', 'Status'];
}
