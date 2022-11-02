<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['user_id', 'title', 'slug', 'content', 'cover_image'];



    /**
     * Get the author that owns the Article
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id',);
    }

    /**
     * The categories that belong to the Article
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class);
    }

    /**
     * The tags that belong to the Article
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }

    public function getCategoriesLinksAttribute()
    {
        $categories = $this->categories()->get()->map(function ($category) {
            return '<a href=" ' . route('home') . '?category=' . $category->slug . ' " class="text-blue-500 hover:underline"> ' . $category->name . ' </a>';
        })->implode('|');

        if ($categories === '') return 'None';
        return $categories;
    }

    public function getTagsLinksAttribute()
    {
        $tags = $this->tags()->get()->map(function ($tag) {
            return '<a href=" ' . route('home') . '?tag=' . $tag->slug . ' " class="text-blue-500 hover:underline"> ' . $tag->name . ' </a>';
        })->implode('|');

        if ($tags === '') return 'None';
        return $tags;
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
