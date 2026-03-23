<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proje extends Model
{
    protected $table = 'projeler';

    protected $fillable = [
        'isim',
        'aciklama',
        'teknolojiler',
        'github_url',
        'canli_url',
        'resim',
    ];
}