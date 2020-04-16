<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TagRequest;
use App\Tag;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TagController extends Controller
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

        $tags = Tag::query();

        if ($search = $request->input('search')) {
            $tags->search($search);
        }

        $tags = $tags->get();

        return view('admin.tags.index', compact(
            'tags',
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
        return view('admin.tags.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param TagRequest $request
     * @return RedirectResponse
     */
    public function store(TagRequest $request)
    {
        $tag = new Tag($request->all());
        $tag->save();

        return redirect()->action('TagController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param Tag $tag
     * @return Factory|View
     */
    public function show(Tag $tag)
    {
        return view('admin.tags.show', compact('tag'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Tag $tag
     * @return Factory|View
     */
    public function edit(Tag $tag)
    {
        return view('admin.tags.edit', compact('tag'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param TagRequest $request
     * @param Tag $tag
     * @return RedirectResponse
     */
    public function update(TagRequest $request, Tag $tag)
    {
        $tag->fill($request->all());
        $tag->save();

        return redirect()->action('TagController@show', $tag);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Tag $tag
     * @param Request $request
     * @return RedirectResponse|JsonResponse
     * @throws \Exception
     */
    public function destroy(Tag $tag, Request $request)
    {
        if (! $tag->delete()) {
            if ($request->expectsJson()) {
                return response()->json(false, 500);
            }
            abort(500);
        }

        if ($request->expectsJson()) {
            return response()->json(true);
        }
        return redirect()->action('TagController@index');
    }
}
