<?php
declare(strict_types=1);

namespace Igdb\Tests;

require_once __DIR__ . '/../vendor/autoload.php';

use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use Igdb\ApiClient;
use Igdb\Config;
use Lukasoppermann\Httpstatus\Httpstatuscodes as Status;
use PHPUnit\Framework\TestCase;

class Base extends TestCase
{
    protected ApiClient $client;
    protected Config $config;
    protected Credentials $credentials;

    public function __construct(?string $name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);

        $this->credentials = new Credentials();
        $this->config = $this->getConfig();
        $this->client = $this->getClient();
    }

    private function getConfig(): Config
    {
        return new Config($this->credentials->getClientId(), $this->credentials->getAccessToken());
    }

    private function getClient(): ApiClient
    {
        $config = new Config($this->credentials->getClientId(), $this->credentials->getAccessToken());
        return new ApiClient($config);
    }

    protected function getMockedHttpClient(string $resource, string $function): Client
    {
        $path = sprintf('%s/Data/Resources/%s/%s.json', __DIR__, $resource, $function);

        $mock = new MockHandler(
            [new Response(Status::HTTP_OK, ['Content-Type' => 'application/json'], file_get_contents($path))]
        );

        $handlerStack = HandlerStack::create($mock);

        return new Client(['handler' => $handlerStack]);
    }
}
