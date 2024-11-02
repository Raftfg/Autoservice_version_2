<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Services_photo;
use App\Models\Services;
use Illuminate\Http\Request;

class ServicesPhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $photo = Services_photo::all();
        return view('admin.services_photo.index', compact('photo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $service = Services::all();
        return view('admin.services_photo.create', compact('service'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $photo = time().'.'.$request->photo->extension();
        $request->photo->move(public_path('services_photo'), $photo);
        $photo = Services_photo::create([
            'designation_sous_service' => $request->designation,
            'photo' => $photo,
            'id_service' => $request->service,
            'prix' => 0
        ]);
        return redirect()->route('services_photo.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Services_photo  $services_photo
     * @return \Illuminate\Http\Response
     */
    public function show(Services_photo $services_photo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Services_photo  $services_photo
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service = Services::all();
        $photo = Services_photo::find($id);
        return view('admin.services_photo.update', compact('photo','service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Services_photo  $services_photo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $photoN = time().'.'.$request->photo->extension();
        $request->photo->move(public_path('services_photo'), $photoN);
        $photo = Services_photo::find($id);
        // dd($request);
        $photo->update([
            'designation_sous_service' => $request->designation,
            'photo' => $photoN,
            'id_service' => $request->service,
            'prix' => 0
        ]);
        return redirect()->route('services_photo.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Services_photo  $services_photo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $photo = Services_photo::find($id);
        $photo->delete();
        return redirect()->route('services_photo.index');
    }
}
