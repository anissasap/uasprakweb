<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JanjiTemu extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'email',
        'tanggal',
        'rujukan',
        'phone',
        'keluhan',
    ];
}
