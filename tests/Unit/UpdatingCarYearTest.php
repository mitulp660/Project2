<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Carss;

class UpdatingCarYearTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testUpdatedCarsYear()
    {
        $data['year'] = '2000';
        $carsses = Carss::first();
        $carsses->update($data);
        $this->assertInstanceOf(Carss::class, $carsses);
        $this->assertEquals($data['year'], $carsses->year);
        $this->assertTrue(true);
    }
}
