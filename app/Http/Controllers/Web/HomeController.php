<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Category;
use App\Post;
use App\Tag;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $request->validate([
            'search' => 'string'
        ]);

        $posts = Post::query();

        if ($search = $request->input('search')) {
            $posts->search($search);
        }

        $posts = $posts->get();

        return view('web.home', compact('posts', 'search'));
    }

    /**
     * @param Category $category
     * @param Request $request
     * @return Factory|View
     */
    public function category(Category $category, Request $request)
    {
        $posts = $category->posts;

        return view('web.home', compact('posts'));

    }
}
