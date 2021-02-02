<?php
declare(strict_types=1);

namespace Igdb\Tests\Unit\Resources;

use Igdb\Tests\Base;
use Lukasoppermann\Httpstatus\Httpstatuscodes as Status;

class AgeRatingContentDescriptionTest extends Base
{
    /** @test */
    public function fetch()
    {
        $response = $this->client->ageRatingsContentDescriptions()->fetch();
        $this->assertEquals(Status::HTTP_OK, $response->getResponse()->getStatusCode());

        $data = $response->getData();
        $this->assertIsArray($data);
    }

    /** @test */
    public function fields()
    {
        $data = $this->client->ageRatingsContentDescriptions()->fetch('fields checksum, description;')->getData();

        foreach ($data as $datum) {
            $this->assertArrayHasKey('checksum', $datum);
            $this->assertArrayHasKey('description', $datum);
        }
    }

    /** @test */
    public function where()
    {
        $data = $this->client->ageRatingsContentDescriptions()->fetch('where id = (22474, 21120);')->getData();
        $this->assertEquals([['id' => 21120], ['id' => 22474]], $data);
    }

    /** @test */
    public function limit()
    {
        $this->assertCount(2, $this->client->ageRatingsContentDescriptions()->fetch('limit 2;')->getData());
    }
}
