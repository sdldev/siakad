<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class HomeController extends Controller
{
    public function index()
    {
        $recents = Post::with('category')
            ->limit(3)
            ->get();


        $blogs = Post::all();
        return view('home', [
            'recents' => $recents,
            'blogs' => $blogs,

        ]);
    }
}
