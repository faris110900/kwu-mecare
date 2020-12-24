<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PixelReact extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'sangat_buruk',
        'buruk',
        'biasa',
        'baik',
        'sangat_baik',
    ];
}
