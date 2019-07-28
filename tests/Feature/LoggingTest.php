<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LoggingTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testLogging()
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
    }
}
