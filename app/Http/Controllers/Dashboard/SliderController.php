<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index()
    {
        $sliders = Slider::get();
        return view('dashboard.sliders.index', [
            'sliders' => $sliders,
        ]);
    }
}
