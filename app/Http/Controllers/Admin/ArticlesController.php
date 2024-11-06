<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Articles;
use App\Models\Services;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $article = Articles::all();
        return view('admin.articles.index', compact('article'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $service= Services::all();
        return view('admin.articles.create',compact('service'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $imageName = time().'.'.$request->photo->extension();
        $request->photo->move(public_path('articles'), $imageName);
        Articles::create([
            'titre' => $request->titre,
            'photo' => $imageName,
            'contenu' => $request->contenu,
            'video' => $request->video,
            'id_service' => $request->service
        ]);

        return redirect()->route('articles.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   $services = Services::all();
        $article = Articles::findOrFail($id);
        return view('admin.articlee.show', compact('article','services')); // Notez le chemin 'admin.articles.show'
    }
// app/Http/Controllers/ArticleController.php

   


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service = Services::all();
        $article = Articles::find($id);
        return view('admin.articles.update', compact('article','service'));
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
        $imageName = time().'.'.$request->photo->extension();
        $request->photo->move(public_path('articles'), $imageName);
        $article = Articles::find($id);
        $article->update([
            'titre' => $request->titre,
            'photo' => $imageName,
            'contenu' => $request->contenu,
            'video' => $request->video,
            'id_service' => $request->service
        ]);
        return redirect()->route('articles.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Articles::find($id);
        $article->delete();
        return redirect()->route('articles.index');
    }
}
