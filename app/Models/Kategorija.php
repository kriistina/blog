<?php

namespace App\Models;

use App\Models\Clanak;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kategorija extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'kategorije';

    protected $fillable = [
        'naziv',
    ];

}
