<?php

namespace App\Controllers\Users;

class Users extends BaseController
{
	public function index()
	{
		return view('users/index');
	}
	public function login()
	{
		return view('users/login');
	}
	public function logout()
	{
		return view('users/login');
	}
	public function register()
	{
		return view('users/register');
	}

}