<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Rendez_vous;
use Illuminate\Http\Request;

class Rendez_vousController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rdv = Rendez_vous::all();
        return view('admin.rendez_vous.index', compact('rdv'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.rendez_vous.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rdv = Rendez_vous::create([
            'email' => $request->email,
            'motif' => $request->motif,
            'heure' => $request->heure,
            'entreprise' => $request->entreprise,
            'nom' => $request->nom,
            'telephone' => $request->telephone,
            'message' => $request->message,
            'date_rendez_vous' => $request->date_rendez_vous
        ]);
        return redirect()->route('rendez_vous.index');
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
        $rdv = Rendez_vous::find($id);
        return view('admin.rendez_vous.update', compact('rdv'));
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
        $rdv = Rendez_vous::find($id);
        $rdv->update([
            'email' => $request->email,
            'motif' => $request->motif,
            'heure' => $request->heure,
            'entreprise' => $request->entreprise,
            'nom' => $request->nom,
            'telephone' => $request->telephone,
            'message' => $request->message,
            'date_rendez_vous' => $request->date_rendez_vous
        ]);
        return redirect()->route('rendez_vous.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rdv = Rendez_vous::find($id);
        $rdv->delete();
        return redirect()->route('rendez_vous.index');
    }
}
