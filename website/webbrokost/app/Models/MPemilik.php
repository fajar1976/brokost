<?php

namespace App\Models;

use CodeIgniter\Model;

class MPemilik extends Model
{
    protected $table = "tb_pemilik_kost";
    protected $primaryKey = "id_pemilik";
    protected $allowedFields = ['nama_pemilik', 'alamat', 'no_hp', 'email', 'username', 'katasandi'];

    function cari($katakunci)
    {
        //budi gmail
        $builder = $this->table("tb_pemilik_kost");
        $arr_katakunci = explode(" ", $katakunci);
        for ($x = 0; $x < count($arr_katakunci); $x++) {
            $builder->orLike('nama_pemilik', $arr_katakunci[$x]);
            $builder->orLike('email', $arr_katakunci[$x]);
            $builder->orLike('alamat', $arr_katakunci[$x]);
        }
        return $builder;
    }
}
