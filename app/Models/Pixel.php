<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Emosi;
use App\Models\Faktor;

class Pixel extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'sangat_buruk',
        'buruk',
        'biasa',
        'baik',
        'sangat_baik',
        'emosi',
        'faktor'
    ];

    public function emosi(){

        return $this->belongsTo(Emosi::class);
    }

    public function faktor(){

        return $this->belongsTo(Faktor::class);
    }
}
