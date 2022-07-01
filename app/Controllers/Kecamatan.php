<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KecamatanModel;

class Kecamatan extends BaseController
{
    protected $kecamatan;

    function __construct()
    {
        $this->kecamatan = new KecamatanModel();
    }

    public function index()
    {
        $data ['getKecamatan'] = $this->kecamatan->getKecamatan();
        $data['kecamatan'] = $this->kecamatan->findAll();
        return view('kecamatan/index', $data);
    }
    public function add()
    {
        $model = new KecamatanModel();
        $data = array(
            'nama' => $this->request->getPost('nama')
        );
        $model->saveKecamatan($data);
        echo '<script>
                window.location = "'.base_url('kecamatan').'";
            </script>';
    }
    public function create()
    {
        return view('kecamatan/create');
    }
}