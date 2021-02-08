<?php
declare(strict_types=1);

namespace Igdb\Tests\Unit\Resources;

use Igdb\ApiClient;
use Igdb\Tests\Base;
use Lukasoppermann\Httpstatus\Httpstatuscodes as Status;

class CompanyWebsiteTest extends Base
{
    private const RESOURCE = 'CompanyWebsite';

    /** @test */
    public function fetch()
    {
        $client = new ApiClient($this->config, $this->getMockedHttpClient(self::RESOURCE, __FUNCTION__));

        $response = $client->companyWebsites()->fetch();
        $this->assertEquals(Status::HTTP_OK, $response->getResponse()->getStatusCode());

        $data = $response->getData();
        $this->assertIsArray($data);
    }

    /** @test */
    public function fields()
    {
        $client = new ApiClient($this->config, $this->getMockedHttpClient(self::RESOURCE, __FUNCTION__));

        $data = $client->companies()->fetch('fields checksum, url;')->getData();

        foreach ($data as $datum) {
            $this->assertArrayHasKey('checksum', $datum);
            $this->assertArrayHasKey('url', $datum);
        }
    }

    /** @test */
    public function where()
    {
        $client = new ApiClient($this->config, $this->getMockedHttpClient(self::RESOURCE, __FUNCTION__));

        $data = $client->companies()->fetch('where id = (90, 80);')->getData();

        $this->assertEquals([['id' => 90], ['id' => 80]], $data);
    }

    /** @test */
    public function limit()
    {
        $client = new ApiClient($this->config, $this->getMockedHttpClient(self::RESOURCE, __FUNCTION__));

        $this->assertCount(2, $client->companies()->fetch('limit 2;')->getData());
    }
}
