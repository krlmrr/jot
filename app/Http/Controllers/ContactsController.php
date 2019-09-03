<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function store(){
        Contact::create($this->validateData());
    }

    public function show(Contact $contact){
        return $contact;
    }

    public function update(Contact $contact){
        $contact->update($this->validateData());
    }

    public function destroy(Contact $contact){
        $contact->delete();
    }

    private function validateData(){
        return $data = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'birthday' => 'required',
            'company' => 'required',
        ]);
    }
}
