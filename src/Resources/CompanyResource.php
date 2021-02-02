<?php
declare(strict_types=1);

namespace Igdb\Resources;

use Igdb\Response;

class CompanyResource extends Resource
{

    function fetch(string $query = ''): Response
    {
        return $this->get('companies', $query);
    }
}
