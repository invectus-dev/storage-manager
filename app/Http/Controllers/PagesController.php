<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function upload()
    {
        return view('upload');
    }

    public function kontak()
    {
        return view('kontak');
    }

    public function dashboard()
    {
        return view('dashboard');
    }

    public function fitur()
    {
        return view('fitur');
    }
}
