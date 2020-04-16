<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Category;
use App\Post;
use App\Tag;

class DashboardController extends Controller
{
    public function index()
    {
        $posts_count = Post::count();
        $categories_count = Category::count();
        $tags_count = Tag::count();

        return view('admin.dashboard.index', compact('posts_count', 'categories_count', 'tags_count'));
    }
}
