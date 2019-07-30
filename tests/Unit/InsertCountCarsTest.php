<?php

namespace Tests\Unit;

use App\Carss;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class InsertCountCarsTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testCountCars50()
    {
        $carsCount = 50;

        $cars = factory(Carss::class, $carsCount )->create();
        $this->assertLessThanOrEqual( $carsCount, count( $cars ) );
        $this->assertTrue(true);
    }
}
