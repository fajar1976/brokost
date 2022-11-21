<?php

namespace App\Models;

use CodeIgniter\Model;

class Mkost extends Model
{

    protected $table = "tb_kost";
    protected $primaryKey = "id_kost";
    protected $allowedField = [
        'kode_kost',
        'nama_kost',
        'alamat',
        'fasilitas',
        'ukuran',
        'lantai',
        'harga',
        'id_pemilik',
        'id_jenis'
    ];
}
