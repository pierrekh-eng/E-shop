<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Category;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        return [
            'succes'=> true,
            'message'=>'all categories',
            'data'=>$categories
        ];
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request)
    {
        $categories = Category::create($request->all());
        return [
            'success'=>true,
            'message'=>'category added successfully ',
            'data'=>$categories
        ];
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        return [
            'success'=>true,
            'message'=>'one added',
            'data'=>$category,
        ];
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        $category->update($request->all());
        return [
            'success'=>true,
            'message'=>'category updated successfully',
            'data'=>$category,
        ];
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return[
            'success'=>true,
            'message'=>'category deleted successfully',
            'data'=>null,
        ];
    }
}
