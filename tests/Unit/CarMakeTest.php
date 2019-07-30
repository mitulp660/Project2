<?php

namespace Tests\Unit;

use App\Carss;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CarMakeTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testCarMake()
    {
        $makeArray = ['honda','ford' ,'toyota'];
        $car =  Carss::first();
        $this->assertContains( $car->make, $makeArray );
        $this->assertTrue(true);
    }
}
