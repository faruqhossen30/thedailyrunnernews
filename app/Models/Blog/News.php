<?php

namespace App\Models\Blog;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $fillable = [

        'title',
        'content',
        'excerpt',
        'blog_meta_title',
        'blog_slug',
        'blog_meta_description',
        'video_url',
        'blog_tag',
        'visibility',
        'status',
        'blog_image',
        'gallery_image',

    ];
}
