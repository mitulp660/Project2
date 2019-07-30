<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;
class CountNumberUserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testUserCount50()
    {
        $userCount = 50;
        $users = factory(User::class, 50 )->create();
        $this->assertLessThanOrEqual( $userCount,count( $users ) );
        $this->assertTrue(true);
    }
}
