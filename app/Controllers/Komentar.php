<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KomentarModel;

class Komentar extends BaseController
{
    protected $komentar;

    function __construct()
    {
        $this->komentar = new KomentarModel();
    }

    public function index()
    {
        $data['komentar'] = $this->komentar->findAll();
        return view('komentar/index', $data);
    }
}