<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\StoreRequest;
use App\Http\Requests\Admin\Category\UpdateRequest;
use App\Models\PostTag;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    public function __invoke()
    {
        $categories = Category::all();
        return view('admin.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        Category::firstOrCreate($data);
        return redirect()->route('admin.category.index');
    }

    public function show(Category $category){
        return view('admin.categories.show', compact('category'));

    }

    public function edit(Category $category){
        return view('admin.categories.edit', compact('category'));
    }
    public function update(UpdateRequest $request, Category $category){
        $data = $request->validated();
        $category->update($data);
        return view('admin.categories.show', compact('category'));
    }

    public function destroy(Category $category){
        $category ->delete();
        return redirect()->route('admin.category.index');
    }

}
