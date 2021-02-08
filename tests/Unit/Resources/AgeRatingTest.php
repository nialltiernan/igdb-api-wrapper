<?php
declare(strict_types=1);

namespace Igdb\Tests\Unit\Resources;

use Igdb\ApiClient;
use Igdb\Tests\Base;
use Lukasoppermann\Httpstatus\Httpstatuscodes as Status;

class AgeRatingTest extends Base
{
    private const RESOURCE = 'AgeRating';

    /** @test */
    public function fetch()
    {
        $client = new ApiClient($this->config, $this->getMockHttpClient(self::RESOURCE, __FUNCTION__));

        $response = $client->ageRatings()->fetch();
        $data = $response->getData();

        $this->assertEquals(Status::HTTP_OK, $response->getResponse()->getStatusCode());
        $this->assertIsArray($data);
    }

    /** @test */
    public function fields()
    {
        $client = new ApiClient($this->config, $this->getMockHttpClient(self::RESOURCE, __FUNCTION__));

        $data = $client->ageRatings()->fetch('fields checksum, category;')->getData();

        foreach ($data as $datum) {
            $this->assertArrayHasKey('checksum', $datum);
            $this->assertArrayHasKey('category', $datum);
        }
    }

    /** @test */
    public function where()
    {
        $client = new ApiClient($this->config, $this->getMockHttpClient(self::RESOURCE, __FUNCTION__));

        $data = $client->ageRatings()->fetch('where id = (25, 26);')->getData();

        $this->assertEquals([['id' => 25], ['id' => 26]], $data);
    }

    /** @test */
    public function limit()
    {
        $client = new ApiClient($this->config, $this->getMockHttpClient(self::RESOURCE, __FUNCTION__));

        $this->assertCount(2, $client->ageRatings()->fetch('limit 2;')->getData());
    }
}
