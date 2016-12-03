<?php
namespace App\Controller;
use App\Core\App;
/**
* UsersController responsible for displaying users
*/
class UsersController
{
	public function index()
	{
		$data['users'] =  App::get('database')->select_all('registration');
		return view('users',$data);		
	}
	public function store() {
		//store user and redirect to all user
		App::get('database')->insert_data('registration',$_POST);
		return redirect('php-practicioner/pdo-refactoring/index.php/users');
	}
}