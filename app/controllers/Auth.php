<?php


namespace App\controllers;


use App\services\Router;

class Auth
{
	public function logout() {
		unset($_SESSION['user']);
		Router::redirect ( '/login');
	}
	public function login($data) {
		$email = $data['email'];
		$password = $data['password'];
		$user = \R::findOne ( 'users', "email = ?", [$email]);
		if(!$user) {
			die("Cant find user");
		}
		if(password_verify ( $password, $user->password)) {
			session_start();
			$_SESSION['user'] = [
				'id' => $user->id,
				"email" => $user->email,
				"full_name" => $user->full_name,
				"username" => $user->username,
				"group" => $user->group,
				"avatar" => $user->avatar,
			];
			Router::redirect ( '/profile');
		}else{
			die( 'Invalid login or password' );
		}
	}
	public function register($data, $files) {
		$email = $data['email'];
		$username = $data['username'];
		$full_name = $data['full_name'];
		$password = $data['password'];
		$password_conform = $data['password_conform'];
		if($password !== $password_conform) {
			Router::error ( 500);
			die();
		}

		$avatar = $files['avatar'];

		$fileName = time() . '_' .  $avatar['name'];
		$path = 'uploads/avatars/' . $fileName;

		if (move_uploaded_file($avatar['tmp_name'],$path ))
		{
			$user = \R::dispense ( 'users');
			$user->email = $email;
			$user->username = $username;
			$user->full_name = $full_name;
			$user->group = 1;
			$user->avatar = '/' . $path;
			$user->password = password_hash ( $password, PASSWORD_DEFAULT);
			\R::store($user);
			Router::redirect('/login');
		}else
		{
			Router::error ( 500);
		}
	}
}