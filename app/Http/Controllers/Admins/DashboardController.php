<?php

namespace App\Http\Controllers\Admins;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Redirect;

class DashboardController extends Controller
{
    //
    public function index(){
    return view('dashboard');
    }
    public function show()
    {
        if (Auth::guest()) 
            return Redirect::route('login');

        return View::make('dashboard');
    }
}
