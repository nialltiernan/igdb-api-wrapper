<?php
declare(strict_types=1);

namespace Igdb;

class Config
{
    private string $baseUrl = 'https://api.igdb.com/v4/';
    private string $clientId;
    private string $accessToken;

    public function __construct(string $clientId, string $accessToken)
    {
        $this->clientId = $clientId;
        $this->accessToken = $accessToken;
    }

    public function getBaseUrl(): string
    {
        return $this->baseUrl;
    }

    public function getClientId(): string
    {
        return $this->clientId;
    }

    public function getAuthorization(): string
    {
        return 'Bearer ' . $this->accessToken;
    }
}
