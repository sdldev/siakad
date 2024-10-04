<?php

namespace App\Http\Controllers\Dashboard;

use App\Traits\FileUploadTrait;
use App\Http\Controllers\Controller;
use Illuminate\View\View;
use App\Models\Category;
use App\Models\Post;
use App\Models\Statuspost;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Support\Str;
use Carbon\Carbon;
use File;

class PostController extends Controller
{
    use FileUploadTrait;

    public function index()
    {
        $posts = Post::with('category','user')
        ->get();
        return view('dashboard.posts.index', [
            'posts' => $posts,
        ]);
    }
    public function create()
    {
        $posts = Post::get();
        $categories = Category::all(); 
        $status = Statuspost::all(); 

        return view('dashboard.posts.create', compact('posts','categories','status'));
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,jpg,png,webp|max:3000',
            'title' => 'required|unique:posts,title|max:150',
            'content' => 'required|min:250',
            'category_id' => 'required|exists:categories,id',
            'status_id' => 'required|exists:statusposts,id',
            'description' => 'required|string|max:200',
        ]);
        $today = Carbon::now('Asia/Jakarta')->format('hms-dmY');

        $Image = new ImageManager(new Driver());
        $new_name = Str::slug($request->title) . '-' . time() . "." . 'webp';

        $image = $Image->read($request->file('image'));
        $image->toWebp();
        $image->scaleDown(height: 800);
        $image->save(('storage/posts/images/' . $new_name));
        $thumbnail = $Image->read($request->file('image'));
        $thumbnail->toWebp();
        $thumbnail->scaleDown(height: 200);
        $thumbnail->save(('storage/posts/thumbnail/' . $new_name));

        $news = new Post();
        $news->user_id = auth()->user()->id;
        $news->image = $new_name;
        $news->thumbnail = $new_name;
        $news->title = $request->title;
        $news->category_id = $request->category_id;

        $news->slug = Str::slug($request->title).'-'.$today;
        $news->content = $request->content;
        $news->description = $request->description;
        $news->tags = $request->tags;
        $news->status_id = $request->status_id;
        $news->viewer = '1';
        $news->save();
        return redirect()->route('posts.index')->with('status', 'Post Created Successfully');
    }
    public function show(Post $post): View
    {
        return view('dashboard.posts.show', compact('post'));
    }


    public function edit(Post $post): View
    {
        $categories = Category::all(); 
        $status = Statuspost::all(); 
        return view('dashboard.posts.edit', compact('post','categories','status'));
    }

    public function update(Request $request, string $post): RedirectResponse
    {
        $url = $request->input('url');

        $request->validate([
            'title' => 'required|string|min:25|max:150',
            'content' => 'required|min:250',
            'description' => 'required|string|max:200',
        ]);
        $post = Post::findOrFail($post);
        $post->title = $request->title;
        $post->content = $request->content;
        $post->description = $request->description;
        $post->tags = $request->tags;
        $post->status_id = $request->status_id;
        $post->category_id = $request->category_id;
        $post->save();
        if ($request->hasFile('image')) {
            if (!empty($post->image)) {
                $imagePath = 'storage/posts/images/' . basename($post->image);
                $thumbnailPath = 'storage/posts/thumbnail/' . basename($post->image);
                if (file_exists($imagePath)) {
                    unlink($imagePath);
                }

                if (file_exists($thumbnailPath)) {
                    unlink($thumbnailPath);
                }
                $Image = new ImageManager(new Driver());
                $new_name = Str::slug($request->title) . '-' . time() . "." . 'webp';

                $image = $Image->read($request->file('image'));
                $image->toWebp();
                $image->scaleDown(height: 800);
                $image->save(('storage/posts/images/' . $new_name));
                $thumbnail = $Image->read($request->file('image'));
                $thumbnail->toWebp();
                $thumbnail->scaleDown(height: 200);
                $thumbnail->save(('storage/posts/thumbnail/' . $new_name));

                Post::where('id', $post->id)->update([
                    'image' => $new_name,
                    'thumbnail' => $new_name,

                ]);
            } else {

                $Image = new ImageManager(new Driver());
                $new_name = Str::slug($request->name) . '-' . time() . "." . 'webp';

                $image = $Image->read($request->file('image'));
                $image->toWebp();
                $image->scaleDown(height: 800);
                $image->save(('storage/posts/images/' . $new_name));
                $thumbnail = $Image->read($request->file('image'));
                $thumbnail->toWebp();
                $thumbnail->scaleDown(height: 200);
                $thumbnail->save(('storage/posts/thumbnail/' . $new_name));

                Post::where('id', $post->id)->update([
                    'image' => $new_name,
                    'thumbnail' => $new_name,

                ]);
            }
        }

        return redirect($url)->with('status', 'Data Created Successfully');
    }


    public function destroy(Post $post)
    {
        $imagePath = 'storage/posts/images/' . basename($post->image);
        $thumbnailPath = 'storage/posts/thumbnail/' . basename($post->image);
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }
        if (file_exists($thumbnailPath)) {
            unlink($thumbnailPath);
        }
        $post->delete();
        return redirect()->back()->with('status', 'Data Delete Successfully');
    }
}
