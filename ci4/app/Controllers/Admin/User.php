<?php namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class User extends BaseController
{
    protected $session = null;

    public function __construct()
    {
        $this->session = \Config\Services::session();
    }

    public function index()
	{
		echo "User";
    }
    
    public function create()
    {
        
        $tbluser = [
            'user'  => 'koki',
            'email' => 'koki@caklul.com',
            'level' => 'koki'
        ];

        $this->session->set($tbluser);
    }

    public function read()
    {
        echo $this->session->get('user');
        echo "<br>";
        echo $this->session->get('email');
        echo "<br>";
        echo $this->session->get('level');

        //print_r($session);
    }

    public function delete()
    {
        $this->session->remove('email');
    }

    public function destroy()
    {
        $this->session->destroy();
    }

    

	//--------------------------------------------------------------------

}
