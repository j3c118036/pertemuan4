<?php namespace App\Controllers;

class Mahasiswa extends BaseController
{
	public function index()
	{
		echo "PABW";
    }
    
    public function ucapan(){
        $data["n"]=$this->request->getPost("nama");
        //return view ("hello");
        echo view ("hello", $data);
    }


}
?>