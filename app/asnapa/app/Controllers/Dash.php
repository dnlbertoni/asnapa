<?php

namespace App\Controllers;

class Dash extends BaseController
{
	public function index()
	{
		return view('dash/index');
	}
}