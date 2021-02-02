<?php
declare(strict_types=1);

namespace Igdb\Tests\Unit\Resources;

use Igdb\Tests\Base;
use Lukasoppermann\Httpstatus\Httpstatuscodes as Status;

class ArtworkTest extends Base
{
    /** @test */
    public function fetch()
    {
        $response = $this->client->artwork()->fetch();
        $this->assertEquals(Status::HTTP_OK, $response->getResponse()->getStatusCode());

        $data = $response->getData();
        $this->assertIsArray($data);
    }

    /** @test */
    public function fields()
    {
        $data = $this->client->artwork()->fetch('fields checksum, game;')->getData();

        foreach ($data as $datum) {
            $this->assertArrayHasKey('checksum', $datum);
            $this->assertArrayHasKey('game', $datum);
        }
    }

    /** @test */
    public function where()
    {
        $data = $this->client->artwork()->fetch('where id = (5305, 5307);')->getData();
        $this->assertEquals([['id' => 5305], ['id' => 5307]], $data);
    }

    /** @test */
    public function limit()
    {
        $this->assertCount(2, $this->client->artwork()->fetch('limit 2;')->getData());
    }
}
