<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke(Request $request)
    {
        $articles = Article::with(['categories', 'tags', 'author'])

            // get articles by category slug
            ->when(request('category'), function ($query) {
                return $query->whereHas('categories', function ($q) {
                    return $q->where('slug', request('category'));
                });
            })

            // get articles by tag slug
            ->when(request('tag'), function ($query) {
                return $query->whereHas('tags', function ($q) {
                    return $q->where('slug', request('tag'));
                });
            })

            // get articles by search query matching (title, content)
            ->when(request('query'), function ($query) {
                return $query->where('title', 'like', '%' . request('query') . '%')
                    ->orWhere('content', 'like', '%' . request('query') . '%');
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
        return view('index', compact('articles',  'tags'));
    }
}
