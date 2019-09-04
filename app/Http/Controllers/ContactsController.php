<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Http\Resources\Contact as ContactResource;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function index()
    {
        $this->authorize('viewAny', Contact::class);
        return ContactResource::collection(request()->user()->contacts);
    }

    public function store()
    {
        $this->authorize('create', Contact::class);
        request()->user()->contacts()->create($this->validateData());
    }

    public function show(Contact $contact)
    {
        $this->authorize('view',$contact);
        return new ContactResource($contact);
    }

    public function update(Contact $contact)
    {
        $this->authorize('view',$contact);

        $contact->update($this->validateData());
    }

    public function destroy(Contact $contact)
    {
        $this->authorize('view',$contact);

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
