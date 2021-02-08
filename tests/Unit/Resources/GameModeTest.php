<?php
declare(strict_types=1);

namespace Igdb\Tests\Unit\Resources;

use Igdb\ApiClient;
use Igdb\Tests\Base;
use Lukasoppermann\Httpstatus\Httpstatuscodes as Status;

class GameModeTest extends Base
{
    private const RESOURCE = 'GameMode';

    /** @test */
    public function fetch()
    {
        $client = new ApiClient($this->config, $this->getMockHttpClient(self::RESOURCE, __FUNCTION__));

        $response = $client->gameModes()->fetch();
        $this->assertEquals(Status::HTTP_OK, $response->getResponse()->getStatusCode());

        $data = $response->getData();
        $this->assertIsArray($data);
    }

    /** @test */
    public function fields()
    {
        $client = new ApiClient($this->config, $this->getMockHttpClient(self::RESOURCE, __FUNCTION__));

        $data = $client->gameModes()->fetch('fields checksum, url;')->getData();

        foreach ($data as $datum) {
            $this->assertArrayHasKey('checksum', $datum);
            $this->assertArrayHasKey('url', $datum);
        }
    }

    /** @test */
    public function where()
    {
        $client = new ApiClient($this->config, $this->getMockHttpClient(self::RESOURCE, __FUNCTION__));

        $data = $client->gameModes()->fetch('where id = (5, 6);')->getData();

        $this->assertEquals([['id' => 5], ['id' => 6]], $data);
    }

    /** @test */
    public function limit()
    {
        $client = new ApiClient($this->config, $this->getMockHttpClient(self::RESOURCE, __FUNCTION__));

        $this->assertCount(2, $client->gameModes()->fetch('limit 2;')->getData());
    }
}
