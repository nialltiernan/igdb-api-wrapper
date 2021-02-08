<?php
declare(strict_types=1);

namespace Igdb\Tests\Unit\Resources;

use Igdb\ApiClient;
use Igdb\Tests\Base;
use Lukasoppermann\Httpstatus\Httpstatuscodes as Status;

class PlatformVersionReleaseDateTest extends Base
{
    private const RESOURCE = 'PlatformVersionReleaseDate';

    /** @test */
    public function fetch()
    {
        $client = new ApiClient($this->config, $this->getMockHttpClient(self::RESOURCE, __FUNCTION__));

        $response = $client->platformVersionReleaseDates()->fetch();
        $this->assertEquals(Status::HTTP_OK, $response->getResponse()->getStatusCode());

        $data = $response->getData();
        $this->assertIsArray($data);
    }

    /** @test */
    public function fields()
    {
        $client = new ApiClient($this->config, $this->getMockHttpClient(self::RESOURCE, __FUNCTION__));

            $data = $client->platformVersionReleaseDates()->fetch('fields checksum, y;')->getData();

        foreach ($data as $datum) {
            $this->assertArrayHasKey('checksum', $datum);
            $this->assertArrayHasKey('y', $datum);
        }
    }

    /** @test */
    public function where()
    {
        $client = new ApiClient($this->config, $this->getMockHttpClient(self::RESOURCE, __FUNCTION__));

        $data = $client->platformVersionReleaseDates()->fetch('where id = (9, 8);')->getData();

        $this->assertEquals([['id' => 9], ['id' => 8]], $data);
    }

    /** @test */
    public function limit()
    {
        $client = new ApiClient($this->config, $this->getMockHttpClient(self::RESOURCE, __FUNCTION__));

        $this->assertCount(2, $client->platformVersionReleaseDates()->fetch('limit 2;')->getData());
    }
}
