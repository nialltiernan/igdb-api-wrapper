<?php
declare(strict_types=1);

namespace Igdb;

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

class ApiClient
{
    private Config $config;

    public function __construct(Config $config)
    {
        $this->config = $config;
    }

    public function ageRatingsContentDescriptions(): AgeRatingContentDescriptionResource
    {
        return new AgeRatingContentDescriptionResource($this->config);
    }

    public function ageRatings(): AgeRatingResource
    {
        return new AgeRatingResource($this->config);
    }

    public function alternativeNames(): AlternativeNameResource
    {
        return new AlternativeNameResource($this->config);
    }

    public function artwork(): ArtworkResource
    {
        return new ArtworkResource($this->config);
    }

    public function characterMugShots(): CharacterMugShotResource
    {
        return new CharacterMugShotResource($this->config);
    }

    public function characters(): CharacterResource
    {
        return new CharacterResource($this->config);
    }

    public function collections(): CollectionResource
    {
        return new CollectionResource($this->config);
    }

    public function companyLogos(): CompanyLogoResource
    {
        return new CompanyLogoResource($this->config);
    }

    public function companies(): CompanyResource
    {
        return new CompanyResource($this->config);
    }

    public function companyWebsites(): CompanyWebsiteResource
    {
        return new CompanyWebsiteResource($this->config);
    }

    public function covers(): CoverResource
    {
        return new CoverResource($this->config);
    }

    public function externalGames(): ExternalGameResource
    {
        return new ExternalGameResource($this->config);
    }

    public function franchises(): FranchiseResource
    {
        return new FranchiseResource($this->config);
    }

    public function gameEngineLogos(): GameEngineLogoResource
    {
        return new GameEngineLogoResource($this->config);
    }

    public function gameEngine(): GameEngineResource
    {
        return new GameEngineResource($this->config);
    }

    public function gameMode(): GameModeResource
    {
        return new GameModeResource($this->config);
    }

    public function game(): GameResource
    {
        return new GameResource($this->config);
    }

    public function gameVersionFeatures(): GameVersionFeatureResource
    {
        return new GameVersionFeatureResource($this->config);
    }

    public function gameVersionFeatureValues(): GameVersionFeatureValueResource
    {
        return new GameVersionFeatureValueResource($this->config);
    }

    public function gameVersion(): GameVersionResource
    {
        return new GameVersionResource($this->config);
    }

    public function gameVideos(): GameVideoResource
    {
        return new GameVideoResource($this->config);
    }

    public function genres(): GenreResource
    {
        return new GenreResource($this->config);
    }

    public function involvedCompanies(): InvolvedCompanyResource
    {
        return new InvolvedCompanyResource($this->config);
    }

    public function keywords(): KeywordResource
    {
        return new KeywordResource($this->config);
    }

    public function multiplayerModes(): MultiplayerModeResource
    {
        return new MultiplayerModeResource($this->config);
    }

    public function platformFamily(): PlatformFamilyResource
    {
        return new PlatformFamilyResource($this->config);
    }

    public function platformLogos(): PlatformLogoResource
    {
        return new PlatformLogoResource($this->config);
    }

    public function platforms(): PlatformResource
    {
        return new PlatformResource($this->config);
    }

    public function platformVersionCompanies(): PlatformVersionCompanyResource
    {
        return new PlatformVersionCompanyResource($this->config);
    }

    public function platformVersionReleaseDate(): PlatformVersionReleaseDateResource
    {
        return new PlatformVersionReleaseDateResource($this->config);
    }

    public function platformVersion(): PlatformVersionResource
    {
        return new PlatformVersionResource($this->config);
    }

    public function platformWebsite(): PlatformWebsiteResource
    {
        return new PlatformWebsiteResource($this->config);
    }

    public function playerPerspective(): PlayerPerspectiveResource
    {
        return new PlayerPerspectiveResource($this->config);
    }

    public function releaseDate(): ReleaseDateResource
    {
        return new ReleaseDateResource($this->config);
    }

    public function screenshots(): ScreenshotResource
    {
        return new ScreenshotResource($this->config);
    }

    public function search(): SearchResource
    {
        return new SearchResource($this->config);
    }

    public function themes(): ThemeResource
    {
        return new ThemeResource($this->config);
    }

    public function websites(): WebsiteResource
    {
        return new WebsiteResource($this->config);
    }
}
