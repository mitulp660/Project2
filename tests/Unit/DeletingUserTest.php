<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
Use App\User;

class DeletingUserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testDeletingUser()
    {

        $user = User::first();
        if($user)
            $user->delete();
        $this->assertTrue(true);
    }
}
