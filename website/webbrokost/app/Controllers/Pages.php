<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function home()
    {
        echo view('layout/header');
        echo view('layout/footer');
        echo view('pages/vhome');
    }
    public function kost()
    {
        echo view('layout/header');
        echo view('layout/footer');
        echo view('pages/vcarikost');
    }
    public function pemesanan()
    {
        echo view('layout/header');
        echo view('layout/footer');
        echo view('pages/vpemesanan');
    }
}
