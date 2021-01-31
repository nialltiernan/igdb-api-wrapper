<?php
declare(strict_types=1);

namespace Igdb\Tests;

class Credentials
{
    private string $clientId;
    private string $accessToken;

    public function __construct()
    {
        $credentials = json_decode(file_get_contents(__DIR__ . '/credentials.json'), true);
        $this->clientId = $credentials['client-id'];
        $this->accessToken = $credentials['access-token'];
    }

    public function getClientId(): string
    {
        return $this->clientId;
    }

    public function getAccessToken(): string
    {
        return $this->accessToken;
    }
}
