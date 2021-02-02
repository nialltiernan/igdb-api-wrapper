<?php
declare(strict_types=1);

namespace Igdb\Resources;

use Igdb\Response;

class PlatformVersionReleaseDateResource extends Resource
{

    function fetch(string $query = ''): Response
    {
        return $this->get('platform_version_release_dates', $query);
    }
}
