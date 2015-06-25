<?php

namespace App\Http\Controllers;

use App\Http\Requests\PolesRequest;
use App\Pole;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PolesController extends Controller
{
    /**
     * Instantiate a new PostsController instance.
     *
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('entrust');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $poles = Pole::get();
        $poles->load('user');
        return view('poles.admin.index', compact('poles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $users = User::get(['email'])->toJSON();
        return view('poles.admin.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param PolesRequest $request
     * @return Response
     */
    public function store(PolesRequest $request)
    {
        $data = $request->all();
        $data['user_id'] = User::where('email', $data['email'])->first()->id;
        Pole::create($data);
        return redirect(route('admin.poles.index'))->with('success' ,'Le pôle a bien été ajouté.');
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
        $pole = Pole::findOrFail($id);
        $users = User::get(['email']);
        return view('poles.admin.edit', compact('pole', 'users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @param PolesRequest $request
     * @return Response
     */
    public function update($id, PolesRequest $request)
    {
        $data = $request->all();
        $data['user_id'] = User::where('email', $data['email'])->first()->id;
        $pole = Pole::findOrFail($id);
        $pole->update($data);
        return redirect(route('admin.poles.index'))->with('success' ,'Le pôle a bien été mis à jour.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $pole = Pole::findOrFail($id);
        $pole->delete();
        return redirect(route('admin.poles.index'))->with('success', 'Le pôle a bien été supprimé.');
    }
}
