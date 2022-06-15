<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Contact;
use App\Models\Setting;

class ContactUsComponent extends Component
{

    public $name ;
    public $email;
    public $phone;
    public $comment;

    public function updated($faildest)
    {
        $this->validateOnly($faildest , [

            'name' => 'required' ,
            'email' => 'required|email' ,
            'phone' => 'required|numeric' ,
            'comment' => 'required' ,
        ]);
    }

    public function SendMassage()
    {
        $this->validate([
            'name' => 'required' ,
            'email' => 'required|email' ,
            'phone' => 'required|numeric' ,
            'comment' => 'required' ,
        ]);

        $Contacts = new Contact();
        $Contacts->name = $this->name ;
        $Contacts->email = $this->email ;
        $Contacts->phone = $this->phone ;
        $Contacts->comment = $this->comment;
        $Contacts->save();

        session()->flash('massage' , 'massage sent successfully');
        $this->clearform();

    }

    public function clearform()
    {
        $this->name = '' ;
        $this->email = '' ;
        $this->phone = '' ;
        $this->comment = '' ;
    }

    public function render()
    {
        $setting = Setting::find(1);
        return view('livewire.contact-us-component' , compact('setting'))->layout('layouts.website.site');
    }
}
