<?php
declare(strict_types=1);

namespace Igdb\Tests\Unit\Resources;

use Igdb\Tests\Base;
use Lukasoppermann\Httpstatus\Httpstatuscodes as Status;

class AlternativeNamesTest extends Base
{
    /** @test */
    public function fetch()
    {
        $response = $this->client->alternativeNames()->fetch();
        $this->assertEquals(Status::HTTP_OK, $response->getResponse()->getStatusCode());

        $data = $response->getData();
        $this->assertIsArray($data);
    }

    /** @test */
    public function fields()
    {
        $data = $this->client->alternativeNames()->fetch('fields checksum, name;')->getData();

        foreach ($data as $datum) {
            $this->assertArrayHasKey('checksum', $datum);
            $this->assertArrayHasKey('name', $datum);
        }
    }

    /** @test */
    public function where()
    {
        $data = $this->client->alternativeNames()->fetch('where id = (12964, 39844);')->getData();
        $this->assertEquals([['id' => 12964], ['id' => 39844]], $data);
    }

    /** @test */
    public function limit()
    {
        $this->assertCount(2, $this->client->ageRatings()->fetch('limit 2;')->getData());
    }
}
