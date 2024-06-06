<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class ChatComponent extends Component
{
    public $user;

    public function render()
    {
        return view('livewire.chat-component');
    }

    public function mount($user_id)
    {
        $this->user = User::whereId($user_id)->first();
    }
}
