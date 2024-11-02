<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Commandes;
use App\Models\User;
use App\Models\Formations;
use Illuminate\Http\Request;

class CommandesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $commande = Commandes::all();
        return view('admin.commandes.index', compact('commande'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::all();
        $formation = Formations::all();
        return view('admin.commandes.create', compact('user','formation'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $commande = Commandes::create([
            'id_user' => $request->utilisateur,
            'id_formation' => $request->formation
        ]);
        return redirect()->route('commandes.index');
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
        $user = User::all();
        $formation = Formations::all();
        $commande = Commandes::find($id);
        return view('admin.commandes.update', compact('commande','user','formation'));
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
        $commande = Commandes::find($id);
        $commande->update([
            'id_user' => $request->utilisateur,
            'id_formation' => $request->formation
        ]);
        return redirect()->route('commandes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $commande = Commandes::find($id);
        $commande->delete();
        return redirect()->route('commandes.index');
    }
}
