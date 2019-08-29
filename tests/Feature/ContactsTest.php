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
        $this->post('/api/contacts', $this->data());

        $contact = Contact::first();

        $this->assertEquals('Test Name', $contact->name);
        $this->assertEquals('demo@apple.com', $contact->email);
        $this->assertEquals('07/25/1989', $contact->birthday);
        $this->assertEquals('ABC Company', $contact->company);
    }

    /** @test */
    public function fields_are_required(){
        collect(['name', 'email', 'birthday', 'company'])
        ->each(function ($field) {
            $response = $this->post('/api/contacts', array_merge($this->data(), [$field => '']));
            $response->assertSessionHasErrors($field);
            $this->assertCount(0, Contact::all());
        });
    }

    private function data(){
        return [
            'name' => 'Test Name',
            'email' => 'demo@apple.com',
            'birthday' => "07/25/1989",
            'company' => 'ABC Company'
        ];
    }
}
