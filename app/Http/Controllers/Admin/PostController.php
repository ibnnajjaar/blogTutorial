<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use App\Post;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return Factory|View
     */
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

        return view('admin.posts.index', compact(
            'posts',
            'search'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Factory|View
     */
    public function create()
    {
        return view('admin.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param PostRequest $request
     * @return RedirectResponse
     */
    public function store(PostRequest $request)
    {
        $post = new Post($request->all());
        $post->category()->associate($request->input('category'));
        $post->save();

        $post->tags()->attach($request->input('tags'));

        return redirect()->action('Admin\PostController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param Post $post
     * @return Factory|View
     */
    public function show(Post $post)
    {
        return view('admin.posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Post $post
     * @return Factory|View
     */
    public function edit(Post $post)
    {
        return view('admin.posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param PostRequest $request
     * @param Post $post
     * @return RedirectResponse
     */
    public function update(PostRequest $request, Post $post)
    {
        $post->fill($request->all());

        if ($category = $request->input('category')) {
            $post->category()->associate($category);
        }

        if ($tags = $request->input('tags')) {
            $post->tags()->sync($tags);
        }

        $post->save();

        return redirect()->action('Admin\PostController@show', $post);
    }

    /**
     * @param Post $post
     * @param Request $request
     * @return RedirectResponse|JsonResponse
     * @throws \Exception
     */
    public function destroy(Post $post, Request $request)
    {
        if (! $post->delete()) {
            if ($post->expectsJson()) {
                return response()->json(false, 500);
            }
            abort(500);
        }

        if ($request->expectsJson()) {
            return response()->json(true);
        }
        return redirect()->action('Admin\PostController@index');
    }
}
