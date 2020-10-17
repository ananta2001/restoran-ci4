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
		echo view("template/header");
		echo view("kategori/select");
		echo view("template/footer");
	}

	public function selectWhere($id = null)
	{
		echo"<h1>menampilkan data yang dipilih $id </h1>";
	}

	public function formInsert()
	{
		echo view("template/header");
		echo view("kategori/forminsert");
		echo view("template/footer");
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
