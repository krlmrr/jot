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
        $this->post('/api/contacts', ['name' => 'Test Name']);
        $this->assertCount(1, Contact::all());
    }
}