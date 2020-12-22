<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\React;
use App\Models\Story;

class ReactPost extends Component
{
    public $react;

    public function render()
    {
        return view('livewire.react-post');
    }

    public function voteReact(){
        dd('test');
        React::create([
            'story_id' => Story::id(),
            'react_happy' => $this->react,
            'react_smile' => $this->react,
            'react_sad' => $this->react,
            // 'content' => $this->content
        ]);

        // $this->content = "";
        $this->emit('reactVote');
    }

}
