<?php

namespace Social\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
      return view('home');
    }
}