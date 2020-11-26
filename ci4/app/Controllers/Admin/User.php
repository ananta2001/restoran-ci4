<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\User_M;

class User extends BaseController
{
    public function index()
    {
        $pager = \Config\Services::pager();
        $model = new User_M();

        // echo "<pre>";
        // print_r($user);
        // echo "</pre>";

        $data = [
            'judul' => 'DATA USER',
            'user' => $model->paginate(3, 'page'),
            'pager' => $model->pager
        ];

        //echo "<pre>";
        //\print_r($data);
        //echo "</pre>";

        echo view("user/select", $data);
    }

    public function create()
    {
        $data = [
            'level' => ['admin', 'koki', 'kasir']
        ];

        return view("user/insert", $data);
    }

    public function insert()
    {
        if (isset($_POST['password'])) {
            $data = [
                'user' => $_POST['user'],
                'email' => $_POST['email'],
                'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
                'level' => $_POST['level'],
                'aktif' => 1
            ];

            // echo "<pre>";
            // print_r($data);
            // echo "</pre>";

            $model = new User_M();

            if ($model->insert($data) === false) {
                $error = $model->errors();
                session()->setFlashdata('info', $error);
                return redirect()->to(base_url("/admin/user/create"));
            } else {
                return redirect()->to(base_url("/admin/user"));
            }
        }


        // if ($model->insert($_POST) === false) {
        //     $error = $model->errors();
        //     //echo $error['user'];
        //     session()->setFlashdata('info', $error['user']);
        //     return redirect()->to(base_url("/admin/user/create"));
        // } else {
        //     return redirect()->to(base_url("/admin/user"));
        // }
    }


    public function delete($id = null)
    {

        $model = new User_M();
        $model->delete($id);

        return redirect()->to(base_url("/admin/user"));
    }

    public function update($id = null, $isi = 1)
    {
        $model = new User_M();

        if ($isi == 0) {
            $isi = 1;
        } else {
            $isi = 0;
        }

        $data = [
            'aktif' => $isi

        ];

        $model->update($id, $data);
        return redirect()->to(base_url("/admin/user"));
    }

    public function find($id = null)
    {
        $model = new User_M();
        $user = $model->find($id);

        $data = [
            'judul' => 'UPDATE DATA',
            'user' => $user,
            'level' => ['admin', 'koki', 'kasir']
        ];

        //print_r($user);

        return view("user/update", $data);

        //echo "<h1>Update Data $id</h1>";
    }

    public function ubah()
    {
        $id = $_POST['iduser'];

        $data = [
            'email' => $_POST['email'],
            'level' => $_POST['level']
        ];

        $model = new User_M();
        $model->update($id, $data);
        return redirect()->to(base_url("/admin/user"));
    }

    //--------------------------------------------------------------------

}
