<?php

namespace App\Livewire;

use App\Models\User;
use App\Models\Message;
use Livewire\Component;

class ChatComponent extends Component
{
    public $user;
    public $sender_id;
    public $receiver_id;
    public $message = '';

    public function render()
    {
        return view('livewire.chat-component');
    }

    public function mount($user_id)
    {
        $this->sender_id = auth()->user()->id;
        $this->receiver_id = $user_id;
        $this->user = User::whereId($user_id)->first();
    }

    public function sendMessage()
    {
        // dd($this->message);

        $chatMessage = new Message();
        $chatMessage->sender_id = $this->sender_id;
        $chatMessage->receiver_id = $this->receiver_id;
        $chatMessage->message = $this->message;

        $chatMessage->save();

        $this->message = '';
    }
}
