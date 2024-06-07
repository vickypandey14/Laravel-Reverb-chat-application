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
    public $messages = [];

    public function render()
    {
        return view('livewire.chat-component');
    }

    public function mount($user_id)
    {
        $this->sender_id = auth()->user()->id;
        $this->receiver_id = $user_id;

        $messages = Message::where(function($query){
            $query->where('sender_id', $this->sender_id)
                  ->where('receiver_id', $this->receiver_id);
        })->orWhere(function($query){
            $query->where('sender_id', $this->receiver_id)
                  ->where('receiver_id', $this->sender_id);
        })
        ->with('sender:id,name', 'receiver:id,name')->get();

        // dd($messages->toArray());

        foreach ($messages as $message) 
        {
            $this->appendChatMessage($message);
        }

        // dd($this->messages);

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

    public function appendChatMessage($message)
    {
        $this->messages[] = [
            'id' => $message->id,
            'message' => $message->message,
            'sender' => $message->sender->name,
            'receiver' => $message->receiver->name,
        ];
    }
}
