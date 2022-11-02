<?php

namespace App\Http\Livewire\User;

use App\Models\Article;
use App\Models\Category;
use App\Models\Tag;
use Livewire\Component;
use Illuminate\Support\Str;

class CreateArticle extends Component
{
    public $title;
    public $content;
    public $category = []; // category name in array
    public $tags;
    // public $cover_image;

    protected $rules = [
        'title' => 'required | unique:articles',
        'content' => 'required',
        'category' => 'required',
        'tags' => 'required',
    ];

    public function store()
    {
        $this->validate();

        // this will trigger after the validation
        $article = Article::create([
            'user_id' => auth()->id(),
            'title' => $this->title,
            'slug' => Str::slug($this->title),
            'content' => $this->content,
            // 'cover_image' => $this->cover_image,
        ]);

        $article->categories()->attach($this->category);

        $tags = explode(',', $this->tags);
        foreach ($tags as $tag_name) {
            $name = trim($tag_name);  // remove whitespace
            $tag = Tag::firstOrCreate([
                'name' => $name,
                'slug' => $name,
            ]);

            $article->tags()->attach($tag);
        }

        $this->reset();
        return back()->with('success', 'Post created successfully.');
    }

    public function render()
    {
        $categories = Category::all();
        return view('livewire.user.create-article', compact('categories'));
    }
}
