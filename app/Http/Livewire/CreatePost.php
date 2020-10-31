<?php

namespace App\Http\Livewire;

use App\Models\Cerita;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CreatePost extends Component
{
    public $content;

    public function render()
    {
        return view('livewire.create-post');
    }

    public function createPost(){

        Cerita::create([
            'user_id' => Auth::id(),
            'content' => $this->content
        ]);

        $this->content = "";
        $this->emit('postCreate');
    }
}
