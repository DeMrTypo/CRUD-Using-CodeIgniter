<?php

namespace App\Controllers;

class Coba extends BaseController
{
    public function index()
    {
        echo "$this->nama";
    }

    public function coba($nama, $umur)
    {
        echo "Nama saya adalah $nama,  dan umur saya $umur";
    }
    //--------------------------------------------------------------------

}
