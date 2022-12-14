<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function admin()
    {
        return view('Backend.login');
    }

    public function login(Request $req)
    {
        if(Auth::attempt(['email' => $req->email, 'password' => $req->password], $req->remember_me))
        {
            session()->flash('success','Welcome Admin !');
            return redirect('Backend/dashboard');
        }
        else {
            session()->flash('error','Invalid Username or Password !');
            return redirect('/');
        }
    }

    public function dashboard()
    {
       
        return view('Backend.dashboard');
    }

    public function logout()
    {
        Auth::logout();
        Session::flush();
        session()->flash('success','Logout Successfully !');
        return redirect('/');
    }

    public function optimize()
    {
        Artisan::call('optimize');

    }}
