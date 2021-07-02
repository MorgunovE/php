<?php


namespace App\controllers;

//25-1 add class Auth
use App\services\Router; //29-4 add class and method from Router in Auth php

class Auth
{
//38-1 add method logout in Auth php
	public function logout() {
		//38-2 delete session
		unset($_SESSION['user']);
		//38-3 redirect
		Router::redirect ( '/login');
	}
//31-1 add login method in Auth
	public function login($data) {
		//31-2 take info from data
		$email = $data['email'];
		$password = $data['password'];
		//31-2 search the user redbeans method
		$user = \R::findOne ( 'users', "email = ?", [$email]);
		//31-3 if for user search
		if(!$user) {
			die("Cant find user");
		}
		//31-4 if for user password
		if(password_verify ( $password, $user->password)) {
			//31-5 start session
			session_start();
			//31-5 put user in session
			$_SESSION['user'] = [
				'id' => $user->id,
				"email" => $user->email,
				"full_name" => $user->full_name,
				"username" => $user->username,
				"group" => $user->group,
				"avatar" => $user->avatar,
			];
//			32-1 redirect in Auth to profile
			Router::redirect ( '/profile');
		}else{
//			32-2 stop code
			die( 'Invalid login or password' );
		}
	}
//	25-2 method for register
//25-13 take data in Auth php from method post in Router php
	public function register($data, $files) { //27-5 add files in Auth php from Router php
//		27-6 add data
		$email = $data['email'];
		$username = $data['username'];
		$full_name = $data['full_name'];
		$password = $data['password'];
		$password_conform = $data['password_conform'];
		//29-7 add conform pass
		if($password !== $password_conform) {
			Router::error ( 500);
			die();
		}
//		27-7 add files
		$avatar = $files['avatar'];

//		28-2 add uniq name for files
		$fileName = time() . '_' .  $avatar['name'];
//		28-3 add path for files
		$path = 'uploads/avatars/' . $fileName;
//		28-1 add function upload for files in Auth php
		if (move_uploaded_file($avatar['tmp_name'],$path ))
		{
			//29-5 create user
			$user = \R::dispense ( 'users'); //29-6 table name
			//29-6 add data from public function register($data
			$user->email = $email;
			$user->username = $username;
			$user->full_name = $full_name;
			$user->group = 1; // 1 - its user 2 its admin
			$user->avatar = '/' . $path; // absolute path
			//29-8 add hash for pass
			$user->password = password_hash ( $password, PASSWORD_DEFAULT);
			//29-8 save user
			\R::store($user);
//			!--31 part add redirect in Auth php-->
			Router::redirect('/login');
		}else
		{
//			28-4 stop code if problems
			Router::error ( 500); //29-4 add class and method from Router in Auth php
		}
	}
}