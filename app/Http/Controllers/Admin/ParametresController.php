<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Garage;
use Illuminate\Http\Request;

class ParametresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $garage = Garage::all();
        return view('admin.garages.index', compact('garage'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.garages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $logo = time().'.'.$request->logo->extension();
        $request->logo->move(public_path('parametres'), $logo);
        $h1 = time().'.'.$request->header_image_1->extension();
        $request->header_image_1->move(public_path('parametres'), $h1);
        $h2 = time().'.'.$request->header_image_2->extension();
        $request->header_image_2->move(public_path('parametres'), $h2);
        $h3 = time().'.'.$request->header_image_3->extension();
        $request->header_image_3->move(public_path('parametres'), $h3);
        $about = time().'.'.$request->about_image->extension();
        $request->about_image->move(public_path('parametres'), $about);
        $garage = Garage::create([
            'nom' => $request->nom,
            'logo' => $logo,
            'header_image_1' => $h1,
            'header_image_2' => $h2,
            'header_image_3' => $h3,
            'about_image' => $about,
            'about_texte' => $request->about_texte,
            'about_title' => $request->about_title
        ]);
        return redirect()->route('parametres.index');
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
        $garage = Garage::find($id);
        return view('admin.garages.update', compact('garage'));
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
        $logo = time().'.'.$request->logo->extension();
        $request->logo->move(public_path('parametres'), $logo);
        $h1 = time().'.'.$request->header_image_1->extension();
        $request->header_image_1->move(public_path('parametres'), $h1);
        $h2 = time().'.'.$request->header_image_2->extension();
        $request->header_image_2->move(public_path('parametres'), $h2);
        $h3 = time().'.'.$request->header_image_3->extension();
        $request->header_image_3->move(public_path('parametres'), $h3);
        $about = time().'.'.$request->about_image->extension();
        $request->about_image->move(public_path('parametres'), $about);
        $garage = Garage::find($id);
        $garage->update([
            'nom' => $request->nom,
            'logo' => $logo,
            'header_image_1' => $h1,
            'header_image_2' => $h2,
            'header_image_3' => $h3,
            'about_image' => $about,
            'about_texte' => $request->about_texte,
            'about_title' => $request->about_title
        ]);
        return redirect()->route('parametres.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $garage = Garage::find($id);
        $garage->delete();
        return redirect()->route('parametres.index');
    }
}
