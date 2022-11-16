<?php

namespace App\Http\Controllers;

use App\Http\Requests\Category\StoreRequest;
use App\Http\Requests\Category\UpdateRequest;
use App\Http\Resources\CategoryResource;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index() {
        $categories = Category::all();
        return CategoryResource::collection($categories);
    }

    public function store(StoreRequest $request) {
        $data = $request->validated();
        $category = Category::firstOrCreate($data);
        return $category;
    }

    public function show(Category $category) {
        return new CategoryResource($category);
    }

    public function destroy(Category $category) {
        $category->delete();
        return response([]);
    }

    public function update(UpdateRequest $request, Category $category) {
        $data = $request->validated();
        $newCategory = $category->update($data);
        return $newCategory;

    }
}
