<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
public function index(){
    return view('frontend.index');
}

public function about(){
    return view('frontend.about');
}
public function contact(){
    return view('frontend.contact_us');
}
public function ourTeam(){
    return view('frontend.our_team');
}
public function service(){
    return view('frontend.service');
}
public function faq(){
    return view('frontend.faq');
}
public function performance(){
    return view('frontend.performance_market');
}
public function mobile(){
    return view('frontend.mobile_advertising');
}
public function monotize(){
    return view('frontend.monotize_boost');
}
public function project(){
    return view('frontend.project');
}
public function blog(){
    return view('frontend.blog');
}
}
