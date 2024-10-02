<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // $config = Config::first();
        return view('home', [
                // 'config' => $config,

        ]);
    }
}
