<?php

namespace App\Models;

use CodeIgniter\Model;

class JeniswisataModel extends Model
{
    protected $table = 'jenis_wisata';
    protected $primaryKey = 'id';
    protected $returnType = 'object';
    protected $allowedFields = ['id', 'nama'];
}
