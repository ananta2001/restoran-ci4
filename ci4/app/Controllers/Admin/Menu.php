<?php

namespace App\Controllers;

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Menu_M;
use App\Models\Kategori_M;

class Menu extends BaseController
{
    public function index()
    {
        $pager = \Config\Services::pager();
        $model = new Menu_M();

        // echo "<pre>";
        // print_r($kategori);
        // echo "</pre>";

        $data = [
            'judul' => 'DATA MENU',
            'menu' => $model->paginate(3, 'page'),
            'pager' => $model->pager
        ];

        //echo "<pre>";
        //\print_r($data);
        //echo "</pre>";

        echo view("menu/select", $data);
    }

    public function read()
    {
        echo "read data";
    }

    public function option()
    {
        $model = new Kategori_M();
        $kategori = $model->findAll();
        $data = [
            'kategori' => $kategori
        ];
        return view('template/option', $data);
    }

    //--------------------------------------------------------------------

}
