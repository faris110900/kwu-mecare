<?php

namespace App\Http\Livewire;

use App\Models\Cerita;
use Livewire\Component;

class ListPost extends Component
{
    public $updateStateId = 0;
    public $content = 0;

    protected $listeners = [
        'postCreate' => '$refresh'
    ];

    public function render()
    {
        return view('livewire.list-post', [
            'ceritas' => Cerita::latest()->get()
        ]);
    }

    public function showUpdateForm($ceritaId){

        $cerita = Cerita::find($ceritaId);
        $this->content = $cerita->content;
        $this->updateStateId = $ceritaId;
    }

    public function update($ceritaId){

        $cerita = Cerita::find($ceritaId);
        $cerita->content = $this->content;
        $cerita->save();

        $this->updateStateId = 0;

    }
}
