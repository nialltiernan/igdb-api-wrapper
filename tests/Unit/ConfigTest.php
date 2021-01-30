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
        $config = new Config(self::CLIENT_ID, self::ACCESS_TOKEN);

        $this->assertEquals(self::CLIENT_ID, $config->getClientId());
        $this->assertEquals(sprintf('Bearer %s', self::ACCESS_TOKEN), $config->getAuthorization());
        $this->assertEquals('https://api.igdb.com/v4/', $config->getBaseUrl());
    }
}
