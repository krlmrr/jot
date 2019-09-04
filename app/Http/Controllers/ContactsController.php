<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function index()
    {
        return request()->user()->contacts;
    }

    public function store()
    {
        request()->user()->contacts()->create($this->validateData());
    }

    public function show(Contact $contact)
    {
        if(request()->user()->isNot($contact->user)){
            return response([], 403);
        }

        return $contact;
    }

    public function update(Contact $contact)
    {
        if(request()->user()->isNot($contact->user)){
            return response([], 403);
        }

        $contact->update($this->validateData());
    }

    public function destroy(Contact $contact)
    {
        if(request()->user()->isNot($contact->user)){
            return response([], 403);
        }
        
        $contact->delete();
    }

    private function validateData()
    {
        return $data = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'birthday' => 'required',
            'company' => 'required',
        ]);
    }
}
