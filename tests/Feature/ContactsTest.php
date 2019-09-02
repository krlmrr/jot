<?php

namespace Tests\Feature;

use App\Contact;
use Tests\TestCase;
use Illuminate\Support\Carbon;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ContactsTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function fields_are_required(){
        collect(['name', 'email', 'birthday', 'company'])
        ->each(function ($field) {
            $response = $this->post('/api/contacts', array_merge($this->data(), [$field => '']));
            $response->assertSessionHasErrors($field);
            $this->assertCount(0, Contact::all());
        });
    }

    /** @test */
    public function email_must_be_valid_email(){
        $response = $this->post('/api/contacts', array_merge($this->data(), ['email' => 'NOT AN EMAIL']));
        $response->assertSessionHasErrors('email');
        $this->assertCount(0, Contact::all());
    }

    /** @test */
    public function birthdays_are_stored_as_dates(){
        $response = $this->post('/api/contacts', array_merge($this->data()));

        $this->assertCount(1, Contact::all());
        // Checks to see if birthday is an instance of Carbon
        $this->assertInstanceOf(Carbon::class, Contact::first()->birthday);
        // Checks to see if date was parsed properly
        $this->assertEquals('07-25-1989', Contact::first()->birthday->format('m-d-Y'));
    }

    /** @test */
    public function a_contact_can_be_retreived(){
        $contact = factory(Contact::class)->create();

        $response = $this->get('/api/contacts/'.$contact->id);
        $response->assertJson([
            'name'      => $contact->name,
            'email'     => $contact->email,
            'birthday'  => $contact->birthday,
            'company'   => $contact->company,
        ]);
    }

    /** @test */
    public function a_contact_can_be_patched(){
        $contact = factory(Contact::class)->create();

        $response = $this->patch('/api/contacts/' . $contact->id, $this->data());
        $contact = $contact->fresh();

        $this->assertEquals('Test Name', $contact->name);
        $this->assertEquals('test@email.com', $contact->email);
        $this->assertEquals('07/25/1989', $contact->birthday->format('m/d/Y'));
        $this->assertEquals('ABC Company', $contact->company);
    }

    private function data(){
        return [
            'name' => 'Test Name',
            'email' => 'test@email.com',
            'birthday' => "07/25/1989",
            'company' => 'ABC Company'
        ];
    }
}
