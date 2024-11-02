<?php

namespace App\Models;

use App\Models\Commandes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Formations extends Model
{
    use HasFactory;
    protected $fillable = [
        'designation'
    ];

    public function commandes()
    {
        return $this->hasMany(Commandes::class, 'id_user');
    }
}
