<?php
declare(strict_types=1);

namespace Igdb\Tests\Unit;

use Igdb\Resources\AgeRatingContentDescriptionResource;
use Igdb\Resources\AgeRatingResource;
use Igdb\Resources\AlternativeNameResource;
use Igdb\Resources\ArtworkResource;
use Igdb\Resources\CharacterMugShotResource;
use Igdb\Resources\CharacterResource;
use Igdb\Resources\CollectionResource;
use Igdb\Resources\CompanyLogoResource;
use Igdb\Resources\CompanyResource;
use Igdb\Resources\CompanyWebsiteResource;
use Igdb\Resources\CoverResource;
use Igdb\Resources\ExternalGameResource;
use Igdb\Resources\FranchiseResource;
use Igdb\Resources\GameEngineLogoResource;
use Igdb\Resources\GameEngineResource;
use Igdb\Resources\GameModeResource;
use Igdb\Resources\GameResource;
use Igdb\Resources\GameVersionFeatureResource;
use Igdb\Resources\GameVersionFeatureValueResource;
use Igdb\Resources\GameVersionResource;
use Igdb\Resources\GameVideoResource;
use Igdb\Resources\GenreResource;
use Igdb\Resources\InvolvedCompanyResource;
use Igdb\Resources\KeywordResource;
use Igdb\Resources\MultiplayerModeResource;
use Igdb\Resources\PlatformFamilyResource;
use Igdb\Resources\PlatformLogoResource;
use Igdb\Resources\PlatformResource;
use Igdb\Resources\PlatformVersionCompanyResource;
use Igdb\Resources\PlatformVersionReleaseDateResource;
use Igdb\Resources\PlatformVersionResource;
use Igdb\Resources\PlatformWebsiteResource;
use Igdb\Resources\PlayerPerspectiveResource;
use Igdb\Resources\ReleaseDateResource;
use Igdb\Resources\ScreenshotResource;
use Igdb\Resources\SearchResource;
use Igdb\Resources\ThemeResource;
use Igdb\Resources\WebsiteResource;
use Igdb\Tests\Base;

class ApiClientTest extends Base
{
    /** @test */
    public function resources()
    {
        $this->assertInstanceOf(AgeRatingContentDescriptionResource::class, $this->client->ageRatingsContentDescriptions());
        $this->assertInstanceOf(AgeRatingResource::class, $this->client->ageRatings());
        $this->assertInstanceOf(AlternativeNameResource::class, $this->client->alternativeNames());
        $this->assertInstanceOf(ArtworkResource::class, $this->client->artwork());
        $this->assertInstanceOf(CharacterMugShotResource::class, $this->client->characterMugShots());
        $this->assertInstanceOf(CharacterResource::class, $this->client->characters());
        $this->assertInstanceOf(CollectionResource::class, $this->client->collections());
        $this->assertInstanceOf(CompanyLogoResource::class, $this->client->companyLogos());
        $this->assertInstanceOf(CompanyResource::class, $this->client->companies());
        $this->assertInstanceOf(CompanyWebsiteResource::class, $this->client->companyWebsites());
        $this->assertInstanceOf(CoverResource::class, $this->client->covers());
        $this->assertInstanceOf(ExternalGameResource::class, $this->client->externalGames());
        $this->assertInstanceOf(FranchiseResource::class, $this->client->franchises());
        $this->assertInstanceOf(GameEngineLogoResource::class, $this->client->gameEngineLogos());
        $this->assertInstanceOf(GameEngineResource::class, $this->client->gameEngines());
        $this->assertInstanceOf(GameModeResource::class, $this->client->gameModes());
        $this->assertInstanceOf(GameResource::class, $this->client->games());
        $this->assertInstanceOf(GameVersionFeatureResource::class, $this->client->gameVersionFeatures());
        $this->assertInstanceOf(GameVersionFeatureValueResource::class, $this->client->gameVersionFeatureValues());
        $this->assertInstanceOf(GameVersionResource::class, $this->client->gameVersions());
        $this->assertInstanceOf(GameVideoResource::class, $this->client->gameVideos());
        $this->assertInstanceOf(GenreResource::class, $this->client->genres());
        $this->assertInstanceOf(InvolvedCompanyResource::class, $this->client->involvedCompanies());
        $this->assertInstanceOf(KeywordResource::class, $this->client->keywords());
        $this->assertInstanceOf(MultiplayerModeResource::class, $this->client->multiplayerModes());
        $this->assertInstanceOf(PlatformFamilyResource::class, $this->client->platformFamilies());
        $this->assertInstanceOf(PlatformLogoResource::class, $this->client->platformLogos());
        $this->assertInstanceOf(PlatformResource::class, $this->client->platforms());
        $this->assertInstanceOf(PlatformVersionCompanyResource::class, $this->client->platformVersionCompanies());
        $this->assertInstanceOf(PlatformVersionReleaseDateResource::class, $this->client->platformVersionReleaseDates());
        $this->assertInstanceOf(PlatformVersionResource::class, $this->client->platformVersions());
        $this->assertInstanceOf(PlatformWebsiteResource::class, $this->client->platformWebsites());
        $this->assertInstanceOf(PlayerPerspectiveResource::class, $this->client->playerPerspectives());
        $this->assertInstanceOf(ReleaseDateResource::class, $this->client->releaseDates());
        $this->assertInstanceOf(ScreenshotResource::class, $this->client->screenshots());
        $this->assertInstanceOf(SearchResource::class, $this->client->search());
        $this->assertInstanceOf(ThemeResource::class, $this->client->themes());
        $this->assertInstanceOf(WebsiteResource::class, $this->client->websites());
    }
}
