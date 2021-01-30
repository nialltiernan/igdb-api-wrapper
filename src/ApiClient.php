<?php
declare(strict_types=1);

namespace Igdb;

use Igdb\Resources\AgeRatingResource;

class ApiClient
{
    private Config $config;

    public function __construct(Config $config)
    {
        $this->config = $config;
    }

    public function ageRatings(): AgeRatingResource
    {
        return new AgeRatingResource($this->config);
    }
}
