<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\CategoriesRequest;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $categories = Category::get();
        $categories->load('parent');
        return view('categories.admin.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $categories = Category::lists('display_name', 'id')->toArray();
        array_unshift($categories, 'Aucun parent');
        return view('categories.admin.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CategoriesRequest $request
     * @return Response
     */
    public function store(CategoriesRequest $request)
    {
        Category::create($request->only('name', 'display_name', 'description', 'parent_id'));
        return redirect(route('admin.categories.index'))->with('success', 'La catégorie a bien été créée.');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $categories = Category::lists('display_name', 'id')->toArray();
        array_unshift($categories, 'Aucun parent');
        $category = Category::findOrFail($id);
        return view('categories.admin.edit', compact('category', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @param CategoriesRequest $request
     * @return Response
     */
    public function update($id, CategoriesRequest $request)
    {
        $category = Category::findOrFail($id);
        $category->update($request->only('name', 'display_name', 'description', 'parent_id'));
        return redirect(route('admin.categories.index'))->with('success', 'La catégorie a bien été mise à jour.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        // add cascade delete
        $category = Category::findOrFail($id);
        $category->delete();
        return redirect(route('admin.categories.index'))->with('success', 'La catégorie a bien été supprimée.');
    }
}
