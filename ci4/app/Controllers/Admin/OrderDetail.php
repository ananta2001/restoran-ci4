<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\OrderDetail_M;


class OrderDetail extends BaseController
{
    public function index()
    {
        $pager = \Config\Services::pager();
        $model = new OrderDetail_M();

        // echo "<pre>";
        // print_r($kategori);
        // echo "</pre>";

        $data = [
            'judul' => 'DATA RINCIAN ORDER',
            'orderdetail' => $model->paginate(3, 'page'),
            'pager' => $model->pager
        ];

        //echo "<pre>";
        //\print_r($data);
        //echo "</pre>";

        echo view("orderdetail/select", $data);
    }

    public function cari()
    {
        if (isset($_POST['awal'])) {
            $awal = $_POST['awal'];
            $sampai = $_POST['sampai'];

            $db = \Config\Database::connect();
            $sql = "SELECT * FROM vorderdetail WHERE tglorder BETWEEN '$awal' AND '$sampai'";

            //echo $sql;

            $result = $db->query($sql);
            $row = $result->getResult('array');

            $data = [
                'judul' => 'DATA RINCIAN ORDER',
                'orderdetail' => $row

            ];

            return view("orderdetail/cari", $data);
        }
    }

    //--------------------------------------------------------------------

}
