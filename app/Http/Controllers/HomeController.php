<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function homepage()
    {
        return view('/home/homepage');
    }

    public function estimating()
    {
        return view('/home/estimating');
    }

    public function pm()
    {
        return view('/home/pm');
    }

    public function consulting()
    {
        return view('/home/consulting');
    }

    public function drafting()
    {
        return view('/home/drafting');

    }

    public function contact()
    {
        return view('/home/contact');
    }

}

?>
