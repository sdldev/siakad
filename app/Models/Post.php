<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'category_id',
        'title',
        'slug',
        'tags',
        'description',
        'content',
        'image',
        'thumbnail',
        'status',
    ];
    public function getImageAttribute($image)
    {
        return asset('storage/posts/images/' . $image);
    }

    public function getThumbAttribute($thumbnail)
    {
        return asset('storage/posts/thumbnail/' . $thumbnail);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
