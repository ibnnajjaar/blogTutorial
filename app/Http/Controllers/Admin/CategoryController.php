<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CategoryController extends Controller
{
    /**
     * Displays all categories
     *
     * @param Request $request
     * @return Factory|View
     */
    public function index(Request $request)
    {
        $request->validate([
            'search' => 'string'
        ]);

        $categories = Category::query();

        if ($search = $request->input('search')) {
            $categories->search($search);
        }

        $categories = $categories->get();

        return view('admin.categories.index', compact(
            'categories',
            'search'
        ));
    }

    /**
     * Shows create form
     *
     * @return Factory|View
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Stores a new category
     *
     * @param CategoryRequest $request
     * @return RedirectResponse
     */
    public function store(CategoryRequest $request)
    {
        $category = new Category($request->all());
        $category->save();

        return redirect()->action('Admin\CategoryController@index');
    }

    /**
     * Show single category
     *
     * @param Category $category
     * @return View
     */
    public function show(Category $category)
    {
        return view('admin.categories.show', compact('category'));
    }

    /**
     * Shows edit view
     *
     * @param Category $category
     * @return Factory|View
     */
    public function edit(Category $category)
    {
        return view('admin.categories.edit', compact('category'));
    }

    /**
     * Update category
     *
     * @param Category $category
     * @param CategoryRequest $request
     * @return RedirectResponse
     */
    public function update(Category $category, CategoryRequest $request)
    {
        $category->fill($request->all());
        $category->save();

        return redirect()->action('Admin\CategoryController@show', $category);
    }

    /**
     * @param Category $category
     * @param Request $request
     * @return RedirectResponse|JsonResponse
     * @throws \Exception
     */
    public function destroy(Category $category, Request $request)
    {
        if (! $category->delete()) {
            if ($request->expectsJson()) {
                return response()->json(false, 500);
            }
            abort(500);
        }

        if ($request->expectsJson()) {
            return response()->json(true);
        }
        return redirect()->action('Admin\CategoryController@index');
    }
}
