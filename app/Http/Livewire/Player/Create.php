<?php

namespace App\Http\Livewire\Player;
use App\Models\Player;
use Livewire\Component;

class Create extends Component
{
    public $name;
    public $showSnackbar = false;

    public function submit()
    {
        $validatedData = $this->validate([
            'name' => 'required',
        ], 
        [
            'name.required' => 'Név megadása kötelező.',
        ]);

        Player::create($validatedData);
        $this->reset('name');
        $this->showSnackbar = true;
    }

    public function render()
    {
        return view('livewire.player.create');
    }
}
