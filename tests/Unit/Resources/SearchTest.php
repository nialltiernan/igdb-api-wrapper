<?php
declare(strict_types=1);

namespace Igdb\Tests\Unit\Resources;

use Igdb\ApiClient;
use Igdb\Tests\Base;
use Lukasoppermann\Httpstatus\Httpstatuscodes as Status;

class SearchTest extends Base
{
    private const RESOURCE = 'Search';

    /** @test */
    public function fetch()
    {
        $client = new ApiClient($this->config, $this->getMockHttpClient(self::RESOURCE, __FUNCTION__));

        $response = $client->search()->fetch();
        $this->assertEquals(Status::HTTP_OK, $response->getResponse()->getStatusCode());

        $data = $response->getData();
        $this->assertIsArray($data);
    }

    /** @test */
    public function fields()
    {
        $client = new ApiClient($this->config, $this->getMockHttpClient(self::RESOURCE, __FUNCTION__));

        $data = $client->search()->fetch('search "Halo"; fields name, game;')->getData();

        foreach ($data as $datum) {
            $this->assertArrayHasKey('name', $datum);
            $this->assertArrayHasKey('game', $datum);
        }
    }

    /** @test */
    public function limit()
    {
        $client = new ApiClient($this->config, $this->getMockHttpClient(self::RESOURCE, __FUNCTION__));

        $this->assertCount(2, $client->search()->fetch('limit 2;')->getData());
    }
}
