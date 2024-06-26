<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }
    public function __invoke(){
        return view('dashboard.home');
    }
    public function clients(){
        return view('dashboard.clients');
    }
    public function register(){
        return view('dashboard.register');
    }
}
