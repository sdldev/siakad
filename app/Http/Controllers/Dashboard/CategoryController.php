<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Redirect;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::all();
        return view('dashboard.categories.index', [
            'categories' => $categories,
        ]);
    }

    public function create()
    {

        $newstudents = Category::get();
        return view('dashboard.categories.create', compact('newstudents'));
    }

    public function store(Request $request)
    {
        $data = [
            'name' => $request->name,
            'slug' => Str::slug($request->name)

        ];
        Category::create($data);
        return Redirect::route('categories.index');
    }

    public function show(Category $category)
    {
        return view('dashboard.categories.show', compact('category'));
    }

    public function edit(Category $category)
    {
        return view('dashboard.categories.edit', compact('category'));
    }

    public function update(Request $request, Category $category): RedirectResponse
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);
        $category->name = $request->name;
        $category->slug = Str::slug($request->name);
        $category->save();
        return redirect()->route('categories.index')->with('success', 'Category Updated Successfully');
    }


    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->back()->with('success', 'Data Delete Successfully');
    }
}
