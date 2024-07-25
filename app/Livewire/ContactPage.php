<?php

namespace App\Livewire;

use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class ContactPage extends Component
{
    public $name = '';
    public $email = '';
    public $message = '';

    protected $rules = 
    [
        'name' => 'required',
        'email' => 'required|email'
    ];

    public function submit()
    {
        $this->validate();

        $mailData=
        [
            'subject'=> 'you have mesage',
            'name' => $this->name,
            'email' => $this->email,
            'message' => $this->message
        ];

        Mail::to('sudew@example.com')->send(new ContactMail($mailData));

        session()->flash('success', 'thank you for the message');

        $this->redirect('/contacts');
    }
    public function render()
    {
        return view('livewire.contact-page');
    }
}
