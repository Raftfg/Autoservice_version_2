<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Commandes;
use App\Models\Contacts;
use App\Models\Rendez_vous;
use Illuminate\Support\Facades\Hash;

class SiteController extends Controller
{
    public function index()
    {
        if(Auth()->guest()){
            return redirect('login');
        } else {
            $contactsNbr = 0;
            $contactsNbr = Contacts::count();
            $rendez_vousNbr = Rendez_vous::count();
            $commandesNbr = Commandes::count();
            $commandes = Commandes::all();
            //dd($commandes);
		    return view('admin.home', compact('contactsNbr','commandesNbr','rendez_vousNbr','commandes'));
        }
    }
}
