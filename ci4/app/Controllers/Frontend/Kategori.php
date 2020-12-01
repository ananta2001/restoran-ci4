<?php

namespace App\Controllers\Frontend;

use App\Controllers\BaseController;
use App\Models\Kategori_M;


class Kategori extends BaseController
{
	public function read()
	{
		$pager = \Config\Services::pager();
		$model = new Kategori_M();

		// echo "<pre>";
		// print_r($kategori);
		// echo "</pre>";

		$data = [
			'judul' => 'DATA KATEGORI',
			'kategori' => $model->paginate(3, 'page'),
			'pager' => $model->pager
		];

		//echo "<pre>";
		//\print_r($data);
		//echo "</pre>";

		echo view("kategori/select", $data);
	}

	// public function insert()
	// {
	// 	//print_r($_POST);

	// 	$model = new Kategori_M();

	// 	if ($model->insert($_POST) === false) {
	// 		$error = $model->errors();
	// 		//echo $error['kategori'];
	// 		session()->setFlashdata('info', $error['kategori']);
	// 		return redirect()->to(base_url("/admin/kategori/create"));
	// 	} else {
	// 		return redirect()->to(base_url("/admin/kategori"));
	// 	}
	// }

	// public function create()
	// {

	// 	return view("kategori/insert");
	// }

	public function find($id = null)
	{
		$model = new Kategori_M();
		$kategori = $model->find($id);

		$data = [
			'judul' => 'UPDATE DATA',
			'kategori' => $kategori
		];

		//print_r($kategori);

		return view("kategori/update", $data);

		//echo "<h1>Update Data $id</h1>";
	}

	// public function update($id = null)
	// {
	// 	//print_r($_POST);

	// 	$model = new Kategori_M();
	// 	$id = $_POST['idkategori'];

	// 	if ($model->save($_POST) === false) {
	// 		$error = $model->errors();
	// 		//echo $error['kategori'];
	// 		session()->setFlashdata('info', $error['kategori']);
	// 		return redirect()->to(base_url("/admin/kategori/find/$id"));
	// 	} else {
	// 		return redirect()->to(base_url("/admin/kategori"));
	// 	}
	// 	$model->save($_POST);
	// }

	// public function delete($id = null)
	// {

	// 	$model = new Kategori_M();
	// 	$model->delete($id);

	// 	return redirect()->to(base_url("/admin/kategori"));
	// }

	//--------------------------------------------------------------------

}
