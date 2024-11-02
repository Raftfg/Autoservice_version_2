<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Equipes;
use App\Models\Services;
use Illuminate\Http\Request;

class EquipesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $equipe = Equipes::all();
        return view('admin.equipes.index', compact('equipe'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $service = Services::all();
        return view('admin.equipes.create', compact('service'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $imageName = time().'.'.$request->avatar->extension();
        $request->avatar->move(public_path('equipes'), $imageName);
        $equipe = Equipes::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'role' => $request->role,
            'qualification' => $request->qualification,
            'id_service'=> $request->service,
            'avatar'=> $imageName,
            'facebook'=> $request->facebook,
            'whatsApp'=> $request->whatsapp,
            'gmail'=> $request->gmail,
            'status'=> $request->status,
            'description'=> $request->description
            
        ]);
        return redirect()->route('equipes.index');
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
        $service = Services::all();
        $equipe = Equipes::find($id);
        return view('admin.equipes.update', compact('equipe','service'));
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
        $imageName = time().'.'.$request->avatar->extension();
        $request->avatar->move(public_path('equipes'), $imageName);
        $equipe = Equipes::find($id);
        $equipe->update([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'role' => $request->role,
            'qualification' => $request->qualification,
            'id_service'=> $request->service,
            'avatar'=> $imageName,
            'facebook'=> $request->facebook,
            'whatsApp'=> $request->whatsapp,
            'gmail'=> $request->gmail,
            'status'=> $request->status,
            'description'=> $request->description
        ]);
        return redirect()->route('equipes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $equipe = Equipes::find($id);
        $equipe->delete();
        return redirect()->route('equipes.index');
    }
}
