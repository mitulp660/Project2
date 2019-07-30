<?php

namespace Tests\Feature;


use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;
class ContactPageTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testContact()
    {
        //added to have 200 status was getting 302 as a status instead 200

        $user = User::first();
        $this->be($user);
        $response = $this->get('/contact');

        $response->assertStatus(200);
    }
}
