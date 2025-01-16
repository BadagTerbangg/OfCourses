<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class latihancontroller extends Controller
{
    public function index()
    {
        return view('crud');
    }

    public function tampil()
    {
        return view('crud');
    }
}   