<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use \Auth;

class WelcomeController extends Controller 
{
    public function welcome()
    {
        return view('welcome');
	}
}