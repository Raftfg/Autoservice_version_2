<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    use HasFactory;
    protected $fillable = [
        'titre' ,
        'photo',
        'id_service',
        'contenu',
        'video'
    ];

    public function services()
    {
        return $this->belongsTo(Services::class, 'id_service');
    }
}
