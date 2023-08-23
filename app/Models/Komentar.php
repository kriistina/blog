<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Clanak;

class Komentar extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'komentari';

    protected $fillable = [
        'sadrzaj',
    ];

    public function korisnik()
    {
      return $this->belongsTo(User::class, 'korisnik_id');
    }
    
    public function clanak()
    {
      return $this->belongsTo(Clanak::class, 'clanak_id');
    }
}
