<?php
declare(strict_types=1);

namespace Igdb\Resources;

use Igdb\Response;

class SearchResource extends Resource
{

    function fetch(string $query = ''): Response
    {
        return $this->get('search', $query);
    }
}
