<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    use HasFactory;
    protected $fillable = [
        'designation'
    ];

    public function article()
    {
        return $this->hasMany(Articles::class,'id');
    }

    public function service_photo()
    {
        return $this->hasMany(Services_photo::class,'id');
    }

}
