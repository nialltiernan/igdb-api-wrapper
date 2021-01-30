<?php
declare(strict_types=1);

namespace Igdb\Tests\Unit;

use Igdb\Resources\AgeRatingResource;
use Igdb\Tests\Base;

class ApiClientTest extends Base
{
    /** @test */
    public function resources()
    {
        $this->assertInstanceOf(AgeRatingResource::class, $this->client->ageRatings());
    }
}
