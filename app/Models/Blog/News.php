<?php

namespace App\Models\Blog;

use App\Models\District;
use App\Models\Division;
use App\Models\Upazila;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
class News extends Model
{
    use HasFactory ,Sluggable;
    protected $fillable = [

        'title',
        'content',
        'meta_title',
        'slug',
        'blog_meta_description',
        'video_url',
        'tags',
        'visibility',
        'status',
        'thumbnail',
        'category_id',
        'division_id',
        'district_id',
        'upzilla_id'

    ];
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }


    public function category()
    {
        return $this->hasOne(Category::class, 'id', 'category_id');
    }
    public function getDistrict()
    {
        return $this->hasOne(District::class, 'id', 'district_id');
    }

    public function getDivision()
    {
        return $this->hasOne(Division::class, 'id', 'division_id');
    }

    public function getUpazila()
    {
        return $this->hasOne(Upazila::class, 'id', 'upazila_id');
    }

    public function tags()
    {
        return $this->hasOne(tags::class, 'id', 'tags');
    }
}
