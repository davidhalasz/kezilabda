<?php

namespace App\Http\Livewire\Player;
use App\Models\Player;
use Livewire\Component;

class Show extends Component
{
    public $players;
    public function mount()
    {
        $this->players = Player::get();
    }


    public function render()
    {
        return view('livewire.player.show');
    }
}
