<?php
declare(strict_types=1);

namespace Igdb\Tests\Unit\Resources;

use Igdb\Tests\Base;
use Lukasoppermann\Httpstatus\Httpstatuscodes as Status;

class AgeRatingTest extends Base
{
    /** @test */
    public function fetch()
    {
        $response = $this->client->ageRatings()->fetch();
        $this->assertEquals(Status::HTTP_OK, $response->getResponse()->getStatusCode());

        $data = $response->getData();
        $this->assertIsArray($data);
    }

    /** @test */
    public function limit()
    {
        $this->assertCount(2, $this->client->ageRatings()->fetch('limit 2;')->getData());
    }

    /** @test */
    public function inSelection()
    {
        $data = $this->client->ageRatings()->fetch('where id = (22474, 21120);')->getData();
        $this->assertEquals([['id' => 21120], ['id' => 22474]], $data);
    }
}
