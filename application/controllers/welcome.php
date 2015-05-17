<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {
	/* Fazer autoload de todos os Models no autoload.php */

	public function index()
	{
		/*
		 * --------------------------------------------------------------------
		 * INSERT USER
		 * --------------------------------------------------------------------
		 */
		
		/*$user = new User();
		$user->email = 'test@mob2you.com.br';
		$user->password = md5('1234');
		
		try{
			$user->save();
			echo "Usuario Salvo!";
		}catch(Exception $e){
			echo 'Erro Capturado: <br />',  $e->getMessage(), "\n";
		}*/
		
		/*
		 * --------------------------------------------------------------------
		 * GET USERS
		 * --------------------------------------------------------------------
		 */
		 
		/*$user = User::all();
		
		foreach($user as $u):
			echo "Email: ".$u->email."<br />";
		endforeach;*/
		
		//$this->load->view('welcome_message');
	}
}
