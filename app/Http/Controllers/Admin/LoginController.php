<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use JsValidator;


class LoginController extends Controller
{
    public function index(){
        return view('core.login');
    }

}
