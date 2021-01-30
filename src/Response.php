<?php
declare(strict_types=1);

namespace Igdb;

use Psr\Http\Message\ResponseInterface;

class Response
{
    private ResponseInterface $response;

    public function __construct(ResponseInterface $response)
    {
        $this->response = $response;
    }

    public function getData(): array
    {
        return json_decode((string) $this->response->getBody(), true);
    }

    public function getResponse(): ResponseInterface
    {
        return $this->response;
    }
}
