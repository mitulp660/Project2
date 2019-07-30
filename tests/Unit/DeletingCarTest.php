<?php

namespace Tests\Unit;

use App\Carss;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DeletingCarTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testDeletingCar()
    {
        $carsses = Carss::first();
        if($carsses)
            $carsses->delete();
        $this->assertTrue(true);
    }
}
