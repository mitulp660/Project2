<?php

namespace Tests\Unit;

use App\Carss;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class IntegerCarYearTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testIntegerCarYear()
    {
        $carsses =  Carss::first();
        $this->assertFalse(is_int($carsses->year));
       $this->assertTrue(true);
    }
}
