<?php

namespace App\Http\Controllers;

use App\Models\Devis;
use App\Models\Equipes;
use App\Models\Articles;
use App\Models\Contacts;
use App\Models\Services;
use App\Mail\ContactMail;
use App\Models\Newsletters;
use App\Models\Rendez_vous;
use App\Mail\RendezvousMail;
use Illuminate\Http\Request;
use App\Models\Services_photo;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

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
    /*public function rendezvousform(Request $request)
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
    }*/
    public function rendezvousform(Request $request)
    {
        // Valider les données d'entrée
        $validatedData = $request->validate([
            'email' => 'required|email',
            'motif' => 'required|string|max:255',
            'heure' => 'nullable|string|max:255',
            'entreprise' => 'nullable|string|max:255',
            'nom' => 'required|string|max:255',
            'telephone' => 'required|string|max:20',
            'message' => 'required|string|max:255',
            'date_rendez_vous' => 'required|date',
        ], [
            // Messages d'erreur personnalisés (optionnels)
            'email.required' => 'L\'adresse email est obligatoire.',
            'email.email' => 'L\'adresse email doit être valide.',
            'motif.required' => 'Le motif du rendez-vous est obligatoire.',
            'nom.required' => 'Votre nom est obligatoire.',
            'telephone.required' => 'Votre numéro de téléphone est obligatoire.',
            'message.required' => 'Veuillez décrire le problème de votre véhicule.',
            'date_rendez_vous.required' => 'La date du rendez-vous est obligatoire.',
            'date_rendez_vous.date' => 'La date doit être valide.',
        ]);
    
        // Créer un nouveau rendez-vous
        $rendezvous = Rendez_vous::create($validatedData);
    
        // Envoi de l'email
        Mail::to('raftak99@gmail.com')->send(new RendezvousMail());
    
        // Récupérer les services pour l'affichage
        $services = Services::all();
    
        // Retourner la vue avec les données
        return view('rendezvoustraite', compact('services'));
    }
    


    //devis
    public function devis()
    {
        $services = Services::all();
        return view('devis', compact('services'));
    }


    public function devisform(Request $request)
{
    // Validation des champs
    $validator = Validator::make($request->all(), [
        'name' => 'required|string|max:255',
        'entreprise' => 'nullable|string|max:255',
        'email' => 'required|email|unique:devis|max:255',
        'numero' => 'required|string|max:15',
        'prestation' => 'required|string',
        'messages' => 'required|string|max:500',
    ]);

    // Vérifier les erreurs de validation
    if ($validator->fails()) {
        return redirect()->back()
            ->withErrors($validator)
            ->withInput()
            ->with('error', 'Veuillez corriger les erreurs et réessayer.');
    }

    // Traitement des données (sauvegarde)
    Devis::create($request->all());

    return redirect()->back()->with('success', 'Votre demande a été envoyée avec succès.Nous vous répondons bientôt!');
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