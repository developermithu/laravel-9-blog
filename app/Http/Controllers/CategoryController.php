<?php

namespace App\Http\Controllers;

use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        // Category was passing by appServiceProvider globally
        return view('categories',);
    }
}
