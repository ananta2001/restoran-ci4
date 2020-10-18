<?php namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Kategori extends BaseController
{
	public function index()
	{
		//return view('welcome_message');
		echo "<h1>belajar ci4</h1>";
	}

	public function select()
	{
		$data = [
			'judul' => 'SELECT DATA DARI CONTROLLER',
			'kategori' => ['makanan','minuman','jajan','gorengan','buah']
		];

		//echo "<pre>";
		//\print_r($data);
		//echo "</pre>";

		echo view("kategori/select",$data);
	}

	public function selectWhere($id = null)
	{
		echo"<h1>menampilkan data yang dipilih $id </h1>";
	}

	public function formInsert()
	{
		
		return view("kategori/forminsert");

	}

	public function formUpdate($id = null)
	{
		echo view("template/header");
		echo view("kategori/update");
		echo view("template/footer");
	}

	public function update($id = null)
	{
		echo"<h1>proses update data $id</h1>";
	}

	public function delete($id = null)
	{
		echo"<h1>proses delete data</h1>";
	}

	//--------------------------------------------------------------------

}
