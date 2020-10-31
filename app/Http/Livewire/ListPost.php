<?php

namespace App\Http\Livewire;

use App\Models\Cerita;
use Livewire\Component;

class ListPost extends Component
{
    protected $listeners = [
        'postCreate' => '$refresh'
    ];

    public function render()
    {
        return view('livewire.list-post', [
            'ceritas' => Cerita::latest()->get()
        ]);
    }
}
