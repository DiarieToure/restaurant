<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }
    
    public function redirect()
    {
        $usertype=Auth::user()->usertype;
        if ($usertype==0) {
            return view('admin.adminHome');
        }
        else
        {
            return view('home');
        }
    }


    
}


