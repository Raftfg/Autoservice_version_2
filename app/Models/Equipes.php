<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipes extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom' ,
        'prenom',
        'role' ,
        'qualification' ,
        'id_service',
        'avatar',
        'facebook',
        'whatsApp',
        'gmail',
        'status',
        'description'
    ];

    public function service()
    {
        return $this->belongsTo(Services::class,'id');
    }
}
