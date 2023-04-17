<?php

namespace App\Http\Controllers;

use App\Models\Projet;
use Illuminate\Http\Request;

class ProjetController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Projet::all();
        return view('project.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('project.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'type_handicap' => 'required|string',
            'description' => 'required|string',
        ]);

        $type_handicap = new Projet;
        $type_handicap->nom = $request->type_handicap;
        $type_handicap->description = $request->description;
        $type_handicap->save();
        return redirect('project');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\type_handicap  $type_handicap
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $type_handicap = Projet::find($id);
        return view('project.view',compact('type_handicap'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\type_handicap  $type_handicap
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $type_handicap = Projet::find($id);
        return view('project.edit',compact('type_handicap'));
    }

    /**
     * Update the specified resource in storag
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\type_handicap  $type_handicap
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'type_handicap' => 'required|string',
            'description' => 'required|string',
        ]);
        $type_handicap =Projet::find($id);
        $type_handicap->nom = $request->type_handicap;
        $type_handicap->description = $request->description;
        $type_handicap->save();
        return redirect('project');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\type_handicap  $type_handicap
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Projet::find($id)->delete();
        return redirect('project');
    }
}
