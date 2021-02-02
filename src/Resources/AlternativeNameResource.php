<?php
declare(strict_types=1);

namespace Igdb\Resources;

use Igdb\Response;

class AlternativeNameResource extends Resource
{

    function fetch(string $query = ''): Response
    {
        return $this->get('alternative_names', $query);
    }
}
