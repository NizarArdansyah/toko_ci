<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('template');
    }

    public function produk()
    {
        return view('product');
    }

    public function user()
    {
        return view('user');
    }
}
