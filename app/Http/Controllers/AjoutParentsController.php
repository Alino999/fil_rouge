<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AjoutParents;

class AjoutParentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('form.ListeParent');

        $listeparents = AjoutParents::get()->all();
        return view('form.ListeParent', compact('listeparents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('form.AjoutParents');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attributes = request()->validate([
            'nom'=>'required',
            'prenom'=>'required',
            'pseudo'=>'required',
            'email'=>['required', 'string', 'email', 'max:55', 'unique:ajout_parents'],
            'genre'=>'required',
            'telephone'=>'required',
        ]);
        $tasks = AjoutParents::create($attributes);
        return redirect()->route('AjoutParents');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $listeparents = AjoutParents::findOrFail($id);
        return view ('form.EditParent', compact('listeparents'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $attributes = request()->validate([
            'nom'=>'required',
            'prenom'=>'required',
            'pseudo'=>'required',
            'email'=>['required', 'string', 'email', 'max:55', 'unique:ajout_parents'],
            'genre'=>'required',
            'telephone'=>'required',
        ]);
        $listeparents = AjoutParents::findOrFail($id);
        $listeparents->update($attributes);
        return redirect()->route('listeparents');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $listeparents = AjoutParents::findOrFail($id);
        $listeparents->delete();
        return redirect()->route('listeparents');
    }
}
