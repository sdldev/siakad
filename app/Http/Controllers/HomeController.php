<?php

namespace App\Http\Controllers;

use App\Http\Resources\SliderResource;
use App\Models\Post;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class HomeController extends Controller
{
    public function index()
    {
        $recents = Post::with('category')
            ->limit(3)
            ->get();
        $sliders = Slider::select('image','text')->get();

        $blogs = Post::all();
        return view('home', [
            'recents' => $recents,
            'blogs' => $blogs,
            'sliders' => $sliders,
        ]);
    }

    public function slider(){
        $sliders = Slider::select('image','text')->get();
        return new SliderResource(true, 'List Data Posts', $sliders);
    }
}
