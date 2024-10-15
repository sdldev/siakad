<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Support\Str;
use Illuminate\Http\RedirectResponse;
use Carbon\Carbon;

class SliderController extends Controller
{
    public function index()
    {
        $sliders = Slider::get();
        return view('dashboard.sliders.index', [
            'sliders' => $sliders,
        ]);
    }
    public function show(Slider $slider): View
    {
        return view('dashboard.sliders.show', compact('slide'));
    }
    public function edit(Slider $slider): View
    {
        return view('dashboard.sliders.edit', compact('slider'));
    }

    public function create()
    {
        return view('dashboard.sliders.create');
    }
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,jpg,png,webp|max:3000',
            'text' => 'required|unique:sliders,text|max:150',
        ]);
        $today = Carbon::now('Asia/Jakarta')->format('hms-dmY');

        $Image = new ImageManager(new Driver());
        $new_name = Str::slug($request->text) . '-' . time() . "." . 'webp';

        $image = $Image->read($request->file('image'));
        $image->toWebp();
        $image->scaleDown(height: 800);
        $image->save(('storage/sliders/' . $new_name));

        $news = new Slider();
        $news->image = $new_name;
        $news->text = $request->text;
        $news->save();
        return redirect()->route('sliders.index')->with('status', 'Post Created Successfully');
    }

    public function update(Request $request, string $slider): RedirectResponse
    {
        $url = $request->input('url');

        $request->validate([
            'text' => 'required|string|min:25|max:150',
        ]);
        $slider = Slider::findOrFail($slider);
        $slider->text = $request->text;

        $slider->save();
        if ($request->hasFile('image')) {
            if (!empty($slider->image)) {
                $imagePath = 'storage/sliders/' . basename($slider->image);
                if (file_exists($imagePath)) {
                    unlink($imagePath);
                }

                $Image = new ImageManager(new Driver());
                $new_name = Str::slug($request->text) . '-' . time() . "." . 'webp';

                $image = $Image->read($request->file('image'));
                $image->toWebp();
                $image->scaleDown(height: 800);
                $image->save(('storage/sliders/' . $new_name));

                Slider::where('id', $slider->id)->update([
                    'image' => $new_name,

                ]);
            } else {

                $Image = new ImageManager(new Driver());
                $new_name = Str::slug($request->text) . '-' . time() . "." . 'webp';

                $image = $Image->read($request->file('image'));
                $image->toWebp();
                $image->scaleDown(height: 800);
                $image->save(('storage/sliders/' . $new_name));


                Slider::where('id', $slider->id)->update([
                    'image' => $new_name,
                ]);
            }
        }

        return redirect($url)->with('status', 'Data Created Successfully');
    }
    public function destroy(Slider $slider)
    {
        $imagePath = 'storage/sliders/' . basename($slider->image);
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }

        $slider->delete();
        return redirect()->back()->with('status', 'Data Delete Successfully');
    }
}
