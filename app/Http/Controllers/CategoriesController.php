<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use App\Category;
use App\Http\Requests\CategoriesRequest;
use Illuminate\Http\Request;

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
        $categories = Category::getNestedList('display_name');
        dd($categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $categories = Category::getNestedListWithArrow('display_name');
        //$categories[0] = "Aucun parent";
        $categories = ['0' => 'Aucun parent'] + $categories;
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
        if($request->input('parent_id') == 0){
            $request->path = "uploads/{$request->name}";
            Category::create($request->only('name', 'display_name', 'description', 'path'));
            Storage::makeDirectory($request->path);
        }else{
            $parent = Category::findOrFail($request->input('parent_id'));
            $request->path = "uploads/";
            foreach($parent->getAncestorsAndSelf() as $ancestor){
                $request->path .= "{$ancestor->name}/";
            }
            $request->path .= "{$request->name}";
            Storage::makeDirectory($request->path);
            $parent->children()->create($request->only('name', 'display_name', 'description'));
        }
        return redirect(route('admin.categories.create'))->with('La catégorie a bien été créée.');
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
