<?php

namespace App\Controllers\FrontPage;

use App\Controllers\BaseController;
use App\Models\Pelanggan_M;

class Login extends BaseController
{
	public function index()
	{
		$data = [];
		if ($this->request->getMethod() == 'post') {
			$email = $this->request->getPost('email');
			$password = $this->request->getPost('password');

			$model = new Pelanggan_M();
			$pelanggan = $model->where(['email' => $email, 'aktif' => 1])->first();

			if (empty($user)) {
				$data['info'] = "E-mail Salah !!";
			} else {
				if (password_verify($password, $pelanggan['password'])) {
					$this->setSession($pelanggan);
					return redirect()->to(base_url("/homepage"));
				} else {
					$data['info'] = "Password Salah !!";
				}
			}

			// echo "<pre>";
			// print_r($user);
			// echo "</pre>";
		} else {
			# code...
		}

		return view('template/login', $data);
	}

	public function setSession($pelanggan)
	{
		$data = [
			'pelanggan' => $pelanggan['pelanggan'],
			'email' => $pelanggan['email'],
			'aktif' => $pelanggan['aktif'],
			'loggedIn' => true
		];

		session()->set($data);
	}

	public function logout()
	{
		session()->destroy();
		return redirect()->to(base_url('/homepage'));
	}

	//--------------------------------------------------------------------

}
