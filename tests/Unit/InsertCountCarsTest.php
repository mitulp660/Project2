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
        $carssesCount = 50;

        $carsses = factory(Carss::class, $carssesCount )->create();
        $this->assertLessThanOrEqual( $carssesCount, count( $carsses ) );
        $this->assertTrue(true);
    }
}
