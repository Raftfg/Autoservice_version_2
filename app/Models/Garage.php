<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Garage extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'logo',
        'header_image_1',
        'header_image_2',
        'header_image_3',
        'about_image',
        'about_texte',
        'about_title'
    ];
}
