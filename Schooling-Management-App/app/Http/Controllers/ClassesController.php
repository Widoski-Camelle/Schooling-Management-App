<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClassesController extends Controller
{
    public function index()
    {
        return view('classes.list');
    }

    public function create()
    {
        return view('classes.create');
    }
}
