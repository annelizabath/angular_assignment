<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormsController extends Controller
{
    public function index()
    {
        $title="Divya John, ajce";
        return view('forms.home')->with('student',$title);
        //return view('forms.home', compact('title')) ;
    }
    public function about()
    {
        return view('forms.about') ;
    }
    public function service()
    {
        return view('forms.service') ;
    }
    public function contact()
    {
        return view('forms.contact') ;
    }
}
