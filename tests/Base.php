<?php
declare(strict_types=1);

namespace Igdb\Tests;

require_once __DIR__ . '/../vendor/autoload.php';

use Igdb\ApiClient;
use Igdb\Config;
use PHPUnit\Framework\TestCase;

class Base extends TestCase
{
    protected const CLIENT_ID = '12s055b10vp33qc1odynp02o3pnqh4';
    protected const ACCESS_TOKEN = 'p65o9sl9ojy34ulzivytykopxb6zkq';

    protected ApiClient $client;

    public function __construct(?string $name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);

        $this->client = $this->getClient();

    }

    private function getClient(): ApiClient
    {
        $config = new Config(self::CLIENT_ID, self::ACCESS_TOKEN);
        return new ApiClient($config);
    }
}
