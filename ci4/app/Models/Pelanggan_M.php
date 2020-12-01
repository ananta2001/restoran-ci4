<?php

namespace App\Models;

use CodeIgniter\Model;


class Pelanggan_M extends Model
{
    protected $table = 'tblpelanggan';

    protected $allowedFields = ['pelanggan', 'email', 'password', 'aktif'];

    protected $primaryKey = 'idpelanggan';

    protected $validationRules = [
        'pelanggan' => 'alpha_numeric_space|min_length[3]|is_unique[tbluser.user]',
        'email' => 'valid_email',
    ];

    protected $validationMessages = [
        'pelanggan' => [
            'alpha_numeric_space' => 'tidak boleh menggunakan simbol!!',
            'min_length' => 'Minimal 3 huruf',
            'is_unique' => 'Ada pelanggan yang sama'
        ],
        'email' => [
            'valid_email' => 'Email ada yang salah!!'
        ]
    ];
}
