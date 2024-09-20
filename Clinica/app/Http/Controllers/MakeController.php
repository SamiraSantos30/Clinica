<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MakeController extends Controller
{
    public function index()
    {
        return view('Make');
    }

    public function create()
    {
        return view('test');
    }

    public function store()
    {

    }
}
