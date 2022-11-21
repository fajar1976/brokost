<?php

namespace App\Models;

use CodeIgniter\Model;

class MPencari extends Model
{
    protected $table = "tb_Pencari";
    protected $primaryKey = "id_Pencari";
    protected $allowedField = [
        'kode_pencari',
        'nama_pencari',
        'alamat',
        'jenis_kelamin',
        'pekerjaan',
        'no_hp',
        'email',
        'username',
        'katasandi'
    ];
}
