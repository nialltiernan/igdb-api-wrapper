<?php
declare(strict_types=1);

namespace Igdb\Resources;

use Igdb\Response;

class AgeRatingContentDescriptionResource extends Resource
{

    function fetch(string $query = ''): Response
    {
        return $this->get('age_rating_content_descriptions', $query);
    }
}
