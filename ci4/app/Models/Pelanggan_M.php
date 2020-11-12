<?php

namespace App\Models;

use CodeIgniter\Model;


class Pelanggan_M extends Model
{
    protected $table = 'tblpelanggan';

    protected $allowedFields = ['aktif'];

    protected $primaryKey = 'idpelanggan';
}
