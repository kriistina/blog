<?php

namespace App\Models;

use App\Models\Kategorija;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Clanak extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'clanci';

    protected $fillable = [
        'naslov',
        'sadrzaj',
        'datum_objave',
        'korisnik_id',
        'kategorija_id',
        'komentar_id',
        'slika'

    ];

    public function kategorija()
    {
      return $this->belongsTo(Kategorija::class, 'kategorija_id');
    }

    public function korisnik()
    {
      return $this->belongsTo(User::class, 'korisnik_id');
    }

    public function komentari()
    {
      return $this->hasMany(Komentar::class, 'clanak_id');
    }
   
}
