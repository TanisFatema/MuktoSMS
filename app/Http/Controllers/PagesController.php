<?php

/*
 * Taken from
 * https://github.com/laravel/framework/blob/5.3/src/Illuminate/Auth/Console/stubs/make/controllers/HomeController.stub
 */

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

/**
 * Class HomeController
 * @package App\Http\Controllers
 */
class PagesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function index()
    {
        return view('adminlte::profile');
    }
	 public function menu()
    {
        return view('adminlte::menu');
    }
	 public function event()
    {
        return view('adminlte::event');
    }
	 public function notice()
    {
        return view('adminlte::notice');
    }
	 public function hmenu()
    {
        return view('adminlte::hmenu');
    }
	 public function contacts()
    {
        return view('adminlte::contacts');
    }
		 public function settings()
    {
        return view('adminlte::settings');
    }
		 public function results()
    {
        return view('adminlte::results');
    }
		 public function teacher()
    {
        return view('adminlte::teacher');
    }
		 public function student()
    {
        return view('adminlte::student');
    }
		 public function staff()
    {
        return view('adminlte::staff');
    }
		 public function rlist()
    {
        return view('adminlte::rlist');
    }
}