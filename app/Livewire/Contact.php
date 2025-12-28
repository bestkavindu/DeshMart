<?php

namespace App\Livewire;

use Livewire\Component;

class Contact extends Component
{
    public $name = '';
    public $email = '';
    public $message = '';

    public function submit()
    {
        $this->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'message' => 'required|min:10',
        ]);

        // Here you would typically send an email or save to database
        // Mail::to('admin@example.com')->send(new ContactFormMail($this->name, $this->email, $this->message));

        session()->flash('message', 'Thank you for contacting us! We will get back to you soon.');

        $this->reset();
    }

    public function render()
    {
        return view('livewire.contact');
    }
}
