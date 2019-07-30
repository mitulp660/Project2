<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Carss;
use Carbon\Carbon;

class InsertingCarTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testInsetringCar()
    {
        $data =  [
            'make' => 'honda',
            'model' => 'civic',
            'year' => Carbon::now()->year,
        ];
        $car = Carss::create($data);
        $this->assertInstanceOf(Carss::class, $car);
        $this->assertEquals($data['make'], $car->make);
        $this->assertEquals($data['model'], $car->model);
        $this->assertEquals($data['year'], $car->year);
        $this->assertTrue(true);
    }
}
