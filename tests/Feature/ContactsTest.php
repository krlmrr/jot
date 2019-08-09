<?php

namespace Tests\Feature;

use App\Contact;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ContactsTest extends TestCase
{
    use RefreshDatabase;
    /** @test */
    public function a_contact_can_be_added(){
        $this->withoutExceptionHandling();
        $this->post('/api/contacts', [
            'name' => 'Test Name',
            'email' => 'demo@apple.com',
            'birthday' => "07/25/1989",
            'company' => 'ABC Company'
        ]);

        $contact = Contact::first();

        $this->assertEquals('Test Name', $contact->name);
        $this->assertEquals('demo@apple.com', $contact->email);
        $this->assertEquals('07/25/1989', $contact->birthday);
        $this->assertEquals('ABC Company', $contact->company);
    }
}