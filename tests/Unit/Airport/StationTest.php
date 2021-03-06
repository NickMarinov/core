<?php

namespace Tests\Unit\Airport;

use App\Models\Airport;
use App\Models\Station;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class StationTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function itCanCreateANewStation()
    {
        $station = factory(Station::class)->create();
        $this->assertInstanceOf(Station::class, $station);
    }

    /** @test */
    public function itHasWorkingAirportsRelationship()
    {
        $station = factory(Station::class)->create();
        $airport1 = factory(Airport::class)->create();
        $airport2 = factory(Airport::class)->create();
        $station->airports()->attach([$airport1->id, $airport2->id]);
        $station = $station->fresh();
        $this->assertInstanceOf(Airport::class, $station->airports->first());
        $this->assertCount(2, $station->airports);
    }

    /** @test */
    public function itReturnsType()
    {
        $station = factory(Station::class)->create(['type' => Station::TYPE_APPROACH]);
        $this->assertEquals('Approach/Radar', $station->type);
    }
}
