<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Emosi;
use App\Models\Faktor;
use App\Models\PixelReact;

class Pixel extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'pixel_id',
        'emosi',
        'faktor'
    ];

    public function emosi(){

        return $this->belongsTo(Emosi::class);
    }

    public function faktor(){

        return $this->belongsTo(Faktor::class);
    }

    public function pixelReact(){

        return $this->belongsTo(PixelReact::class);
    }
}
