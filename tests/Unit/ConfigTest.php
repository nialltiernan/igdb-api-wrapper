<?php
declare(strict_types=1);

namespace Igdb\Tests\Unit;

use Igdb\Config;
use Igdb\Tests\Base;

class ConfigTest extends Base
{
    /** @test */
    public function init()
    {
        $config = new Config($this->credentials->getClientId(), $this->credentials->getAccessToken());

        $this->assertEquals($this->credentials->getClientId(), $config->getClientId());
        $this->assertEquals(sprintf('Bearer %s', $this->credentials->getAccessToken()), $config->getAuthorization());
        $this->assertEquals('https://api.igdb.com/v4/', $config->getBaseUrl());
    }
}
