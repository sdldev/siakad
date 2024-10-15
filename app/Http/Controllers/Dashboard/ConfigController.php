<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Config;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Illuminate\View\View;

class ConfigController extends Controller
{
    public function index()
    {
        $configs =  DB::table('configs')->first();
        return view('dashboard.configs.index', [
            'configs' => $configs,
        ]);
    }
    public function edit(Config $config): View
    {
        return view('dashboard.configs.edit');
    }
    public function update(Request $request, Config $configs): RedirectResponse
    {
        $url = $request->input('url');

        $request->validate([
            'name' => 'required|string|min:5|max:150',
            'description' => 'required|string|max:200',
            'address' => 'required|string|max:300',
            'npsn' => 'required|string|max:15',
            'phone' => 'required',
            'email' => 'required',

        ]);
        $data = Config::find(1);
        $data->name = $request->name;
        $data->description = $request->description;
        $data->address = $request->address;
        $data->npsn = $request->npsn;
        $data->phone = $request->phone;
        $data->email = $request->email;
        $data->fb = $request->fb;
        $data->ig = $request->ig;
        $data->tiktok = $request->tiktok;
        $data->save();

        if ($request->hasFile('image')) {
            if (!empty($configs->image)) {
                $imagePath = 'storage/images/' . basename($configs->image);
                if (file_exists($imagePath)) {
                    unlink($imagePath);
                }

                $Image = new ImageManager(new Driver());
                $new_name = Str::slug($request->name) . '-' . time() . "." . 'webp';

                $image = $Image->read($request->file('image'));
                $image->toWebp();
                $image->scaleDown(height: 800);
                $image->save(('storage/images/' . $new_name));

                Config::where('id', $configs->id)->update([
                    'image' => $new_name,

                ]);
            } else {

                $Image = new ImageManager(new Driver());
                $new_name = Str::slug($request->name) . '-' . time() . "." . 'webp';

                $image = $Image->read($request->file('image'));
                $image->toWebp();
                $image->scaleDown(height: 800);
                $image->save(('storage/images/' . $new_name));


                Config::where('id', $configs->id)->update([
                    'image' => $new_name,
                ]);
            }
        }

        return redirect($url)->with('status', 'Data Created Successfully');
    }
}
