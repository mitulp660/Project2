<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class UpdateUserNameTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testUsersUpdate()
    {
        $data['name'] = 'Steve Smith';
        $user = User::First();
        $user->update($data);
        $this->assertInstanceOf(User::class, $user);
        $this->assertEquals($data['name'], $user->name);
        $this->assertTrue(true);
    }
}
