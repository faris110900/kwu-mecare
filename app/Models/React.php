<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class React extends Model
{
    use HasFactory;

    protected $fillable = [
        'story_id',
        'react_happy',
        'react_sad',
        'react_cry'
    ];

    public function story(){
        
        return $this->belongsTo(Story::class);
    }
}
