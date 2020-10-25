<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

use App\Models\Kategori_M;

class Menu extends BaseController
{
	public function index()
	{
		return view('menu/form');
	}

	public function insert()
	{
		//echo"gambar";

		$file = $this->request->getfile('gambar');

		$name = $file->getName();

		$file->move('./upload');

		//echo $name."</br>";
		echo $name . "sudah di Upload";

		//var_dump($file);
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

	// public function update($id = null,$nama = null)
	// {
	// 	echo"<h1>untuk update data dengan id : $id $nama</h1>";
	// }

	//--------------------------------------------------------------------

}
