<?php

namespace App\Modules\User\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Auth\AuthController as AuthController;

class UserController extends Controller
{

    

    public function index()
    {
        return view('User::create-account-step-1');
    }
    

    

}
