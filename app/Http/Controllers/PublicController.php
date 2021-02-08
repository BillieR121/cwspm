<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function homepage()
    {
        return view('public.homepage');
    }
    public function estimating()
    {
        return view('public.estimating');
    }
    public function pm()
    {
        return view('public.pm');
    }
    public function consulting()
    {
        return view('public.consulting');
    }
    public function drafting()
    {
        return view('public.drafting');
    }
    public function contact()
    {
        return view('public.contact');
    }
}
