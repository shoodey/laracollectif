<?php

namespace App\Http\Controllers;

use App\Category;
use App\Helpers\CategoryHierarchy;
use App\Http\Requests\UploadsRequest;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UploadsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param CategoryHierarchy $hierarchy
     * @return Response
     */
    public function index(CategoryHierarchy $hierarchy)
    {
        $categories = Category::all();
        $hierarchy->setupItems($categories);
        return $hierarchy->render();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $categories = Category::lists('display_name', 'id');
        return view('uploads.admin.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param UploadsRequest $request
     * @return Response
     */
    public function store(UploadsRequest $request)
    {
        $category = Category::findOrFail($request->input('category_id'));

        $extension = $request->file('file')->getClientOriginalExtension();
        $name = $request->input('name') . "." . $extension;
        $path = "uploads/" . strftime('%Y') . "/$category->name";
        $request->file('file')->move($path, $name);
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
