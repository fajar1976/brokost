<?php

namespace App\Models;

use CodeIgniter\Model;

class MPencari extends Model
{
    protected $table = "tb_pencari_kost";
    protected $primaryKey = "id_pencari";
    protected $allowedFields = ['nama_pencari', 'alamat', 'jenis_kelamin', 'pekerjaan', 'no_hp', 'email', 'username', 'katasandi'];

    function cari($katakunci)
    {
        //budi gmail
        $builder = $this->table("tb_pencari_kost");
        $arr_katakunci = explode(" ", $katakunci);
        for ($x = 0; $x < count($arr_katakunci); $x++) {
            $builder->orLike('nama_pencari', $arr_katakunci[$x]);
            $builder->orLike('email', $arr_katakunci[$x]);
            $builder->orLike('alamat', $arr_katakunci[$x]);
        }
        return $builder;
    }
}
