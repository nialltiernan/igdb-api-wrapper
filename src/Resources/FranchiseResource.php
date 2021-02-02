<?php
declare(strict_types=1);

namespace Igdb\Resources;

use Igdb\Response;

class FranchiseResource extends Resource
{

    function fetch(string $query = ''): Response
    {
        return $this->get('franchises', $query);
    }
}
