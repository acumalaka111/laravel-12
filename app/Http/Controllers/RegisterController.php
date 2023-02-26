<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register()
{
$data = array('title' => 'Homepage');
return view('register.index', $data);
}
}
