<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Clanak extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'clanak';

    protected $fillable = [
        'naslov',
        'sadrzaj',
        'datum_objave',
        'korisnik_id',
        'kategorija_id',
        'komentar_id',
        'slika'


    ];
}
