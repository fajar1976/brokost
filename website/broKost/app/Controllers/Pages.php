<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        echo view('layout/header');
        echo view('layout/footer');
        echo view('pages/home');
    }
    public function tentang()
    {
        echo view('layout/header');
        echo view('layout/footer');
        echo view('pages/tentang');
    }
    public function kontak()
    {
        echo view('layout/header');
        echo view('layout/footer');
        echo view('pages/kontak');
    }
}
