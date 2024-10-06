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

        $slidecontent = File::get('storage/sliders.json');
        $sliders = json_decode(json: $slidecontent, associative: true);

        $blogs = Post::all();
        return view('home', [
            'recents' => $recents,
            'sliders' => $sliders,
            'blogs' => $blogs,

        ]);
    }
}
