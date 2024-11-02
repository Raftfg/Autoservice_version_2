<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rendez_vous extends Model
{
        use HasFactory;
        protected $fillable = [
                'motif',
                'date_rendez_vous',
                'heure',
                'entreprise',
                'email',
                'nom',
                'telephone',
                'message',
        ];
}