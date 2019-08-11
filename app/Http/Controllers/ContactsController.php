<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function store(){

        $data = request()->validate([
            'name'=> 'required',
            'email'=>"",
            'birthday'=>"",
            'company'=>"",
        ]);

        Contact::create($data);
    }
}
