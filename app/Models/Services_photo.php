<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services_photo extends Model
{
    use HasFactory;
    protected $fillable = [
        'designation_sous_service' ,
        'photo',
        'prix',
        'id_service'
    ];

    public function services()
    {
        return $this->belongsTo(Services::class, 'id_service');
    }
}
