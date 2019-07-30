<?php

namespace Tests\Unit;

use App\Carss;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CarModelStringTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testCarModelString()
    {
        $carsses =  Carss::first();
        $this->assertInternalType("string", $carsses->model);
        $this->assertTrue(true);
    }
}
