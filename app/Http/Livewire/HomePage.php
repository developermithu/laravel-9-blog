<?php

namespace App\Http\Livewire;

use App\Models\Article;
use App\Models\Tag;
use Livewire\Component;

class HomePage extends Component
{
    public $searchQuery;
    public $category;
    public $tagName = [];

    protected $queryString = ['searchQuery', 'category', 'tagName'];

    public function removeSearch()
    {
        $this->searchQuery = '';
    }

    public function searchByCategory($slug)
    {
        $this->category = $slug;
    }

    public function searchByTags($slug)
    {
        $this->tagName = $slug;
    }

    public function render()
    {
        $articles = Article::with(['categories', 'tags', 'author'])

            // get articles by category slug
            ->when($this->category, function ($query) {
                return $query->whereHas('categories', function ($q) {
                    return $q->where('slug', $this->category);
                });
            })

            // get articles by tag slug
            ->when($this->tagName, function ($query) {
                return $query->whereHas('tags', function ($q) {
                    return $q->where('slug', $this->tagName);
                });
            })

            // get articles by search query matching (title, content)
            ->when($this->searchQuery, function ($query) {
                return $query->where('title', 'like', '%' . $this->searchQuery . '%')
                    ->orWhere('content', 'like', '%' . $this->searchQuery . '%');
            })

            // get articles by search query
            ->when(request('search'), function ($query) {
                return $query->whereHas('tags', function ($q) {
                    return $q->where('slug', 'like', '%' . request('search') . '%');
                });
            })
            ->latest()
            ->paginate(5);

        $tags = Tag::all();

        return view('livewire.home-page', compact('tags', 'articles'));
    }
}
