<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\JenisWisataModel;

class JenisWisata extends BaseController
{
    protected $jenis_wisata;

    function __construct()
    {
        $this->jenis_wisata = new JenisWisataModel();
    }

    public function index()
    {
        $data['jenis_wisata'] = $this->jenis_wisata->findAll();
        return view('jenis_wisata/index', $data);
    }
}
