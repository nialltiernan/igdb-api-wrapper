<?php
declare(strict_types=1);

namespace Igdb\Tests\Unit\Resources;

use Igdb\Tests\Base;
use Lukasoppermann\Httpstatus\Httpstatuscodes as Status;

class CharacterMugShotTest extends Base
{
    /** @test */
    public function fetch()
    {
        $response = $this->client->characterMugShots()->fetch();
        $this->assertEquals(Status::HTTP_OK, $response->getResponse()->getStatusCode());

        $data = $response->getData();
        $this->assertIsArray($data);
    }

    /** @test */
    public function fields()
    {
        $data = $this->client->characterMugShots()->fetch('fields checksum, url;')->getData();

        foreach ($data as $datum) {
            $this->assertArrayHasKey('checksum', $datum);
            $this->assertArrayHasKey('url', $datum);
        }
    }

    /** @test */
    public function where()
    {
        $data = $this->client->characterMugShots()->fetch('where id = (3554, 3581);')->getData();
        $this->assertEquals([['id' => 3554], ['id' => 3581]], $data);
    }

    /** @test */
    public function limit()
    {
        $this->assertCount(2, $this->client->characterMugShots()->fetch('limit 2;')->getData());
    }
}
