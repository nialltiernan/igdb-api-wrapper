<?php
declare(strict_types=1);

namespace Igdb\Tests;

require_once __DIR__ . '/../vendor/autoload.php';

use Igdb\ApiClient;
use Igdb\Config;
use PHPUnit\Framework\TestCase;

class Base extends TestCase
{
    protected ApiClient $client;
    protected Credentials $credentials;

    public function __construct(?string $name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);

        $this->credentials = new Credentials();
        $this->client = $this->getClient();
    }

    private function getClient(): ApiClient
    {
        $config = new Config($this->credentials->getClientId(), $this->credentials->getAccessToken());
        return new ApiClient($config);
    }
}
