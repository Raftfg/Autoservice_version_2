<?php

namespace App\Http\Controllers;

use App\Models\Contacts;
use App\Models\Services;
use App\Mail\ContactMail;
use App\Models\Newsletters;
use App\Models\Rendez_vous;
use App\Mail\RendezvousMail;
use App\Models\Articles;
use App\Models\Equipes;
use Illuminate\Http\Request;
use App\Models\Services_photo;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class SiteController extends Controller
{
    //accueil
    public function accueil()
    {
        $equipes = Equipes::all();
        $articles = Articles::all();
        $services = Services::all();
        return view('home', compact('equipes', 'articles', 'services'));
    }

    //equipe
    public function equipe()
    {
        $equipes = Equipes::all();
        $services = Services::all();
        return view('equipe', compact('services', 'equipes'));
    }

    //gallery
    public function gallery()
    {
        $services = Services::all();
        return view('gallery', compact('services'));
    }

    //localisation
    public function localisation()
    {
        $services = Services::all();
        return view('localisation', compact('services'));
    }

    //contacteznous
    public function contacteznous()
    {
        $services = Services::all();
        return view('contacteznous', compact('services'));
    }

    //contacteznous
    public function rendezvoustraite()
    {
        $services = Services::all();
        return view('rendezvoustraite', compact('services'));
    }

    //service
    public function service(Request $request, $id)
    {
        $service = Services::find($id);
        $photos = Services_photo::where('id_service', '=', $id)->paginate(3);
        $services = Services::all();
        return view('service', compact('photos', 'services', 'service'));
    }

    //reparation
    public function entretien()
    {
        $services = Services::all();
        return view('entretien', compact('services'));
    }

    //rendez-vous
    public function rendezvous()
    {
        $services = Services::all();
        return view('rendezvous', compact('services'));
    }

    //rendez-vous
    public function rendezvousform(Request $request)
    {
        $rendezvous = Rendez_vous::create([
            'motif' => $request->motif,
            'date_rendez_vous' => $request->rendevous,
            'heure' => $request->heure,
            'entreprise' => $request->entreprise,
            'email' => $request->email,
            'nom' => $request->name,
            'telephone' => $request->telephone,
            'message' => $request->messages,
        ]);

        Mail::to('Takouissa@gmail.fr')->send(new RendezvousMail());
        $services = Services::all();
        // $today = date('y-m-d');
        return;







        view('rendezvoustraite', compact('services'));
    }

    //devis
    public function devis()
    {
        $services = Services::all();
        return view('devis', compact('services'));
    }

    //contactez
    public function contactez(Request $request)
    {
        $contacts = Contacts::create([
            'mail' => $request->email,
            'nom' => $request->name,
            'numero' => $request->numero,
            'suggestion' => $request->suggestion,
            'message' => $request->message,
        ]);
        Mail::to('raftak99@gmail.com')->send(new ContactMail());

        $services = Services::all();
        return view('contacteznous', compact('services'));
    }

    public function newsletter(Request $request)
    {
        $newsletters = Newsletters::create([
            'email' => $request->email,
        ]);
        return redirect('/accueil');
    }
}