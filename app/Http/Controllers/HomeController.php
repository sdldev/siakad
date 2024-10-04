<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $recent = Post::with('category')
            ->limit(3)
            ->get();

        $blogs = Post::get();
        return view('home', [
            'recent' => $recent,
            'blogs' => $blogs,
        ]);
    }
}
