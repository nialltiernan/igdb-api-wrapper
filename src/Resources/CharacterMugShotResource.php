<?php
declare(strict_types=1);

namespace Igdb\Resources;

use Igdb\Response;

class CharacterMugShotResource extends Resource
{

    function fetch(string $query = ''): Response
    {
        return $this->get('character_mug_shots', $query);
    }
}
