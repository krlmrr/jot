<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function store(){
        Contact::create([
            'name'=> request(key['name']),
        ]);
    }
}
