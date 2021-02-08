<?php
declare(strict_types=1);

namespace Igdb\Tests\Unit;

use GuzzleHttp\Client as HttpClient;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use Igdb\ApiClient;
use Igdb\ApiException;
use Igdb\Tests\Base;
use Lukasoppermann\Httpstatus\Httpstatuscodes as Status;

class ExceptionTest extends Base
{
    /** @test */
    public function resources()
    {
        $this->expectException(ApiException::class);

        $client = new ApiClient($this->config, $this->getMockHttpClient('Game', 'fetch'));

        $client->games()->fetch('invalid query');
    }

    protected function getMockHttpClient(string $resource, string $function): HttpClient
    {
        $mock = new MockHandler([$this->getMockResponse($resource, $function)]);

        $handlerStack = HandlerStack::create($mock);

        return new HttpClient(['handler' => $handlerStack]);
    }

    private function getMockResponse(string $resource, string $function): Response
    {
        return new Response(
            Status::HTTP_BAD_REQUEST,
            ['Content-Type' => 'application/json'],
            $this->getMockResponseBody($resource, $function)
        );
    }

    private function getMockResponseBody(string $resource, string $function): string
    {
        return json_encode(['title' => 'Syntax Error', 'status' => Status::HTTP_BAD_REQUEST]);
    }
}
