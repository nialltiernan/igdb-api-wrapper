<?php
declare(strict_types=1);

namespace Igdb;

use GuzzleHttp\Client as HttpClient;
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
    private HttpClient $httpClient;

    public function __construct(Config $config, HttpClient $mockedHttpClient = null)
    {
        $this->config = $config;
        $this->httpClient = $mockedHttpClient ?? new HttpClient();
    }

    public function ageRatingsContentDescriptions(): AgeRatingContentDescriptionResource
    {
        return new AgeRatingContentDescriptionResource($this->config, $this->httpClient);
    }

    public function ageRatings(): AgeRatingResource
    {
        return new AgeRatingResource($this->config, $this->httpClient);
    }

    public function alternativeNames(): AlternativeNameResource
    {
        return new AlternativeNameResource($this->config, $this->httpClient);
    }

    public function artwork(): ArtworkResource
    {
        return new ArtworkResource($this->config, $this->httpClient);
    }

    public function characterMugShots(): CharacterMugShotResource
    {
        return new CharacterMugShotResource($this->config, $this->httpClient);
    }

    public function characters(): CharacterResource
    {
        return new CharacterResource($this->config, $this->httpClient);
    }

    public function collections(): CollectionResource
    {
        return new CollectionResource($this->config, $this->httpClient);
    }

    public function companyLogos(): CompanyLogoResource
    {
        return new CompanyLogoResource($this->config, $this->httpClient);
    }

    public function companies(): CompanyResource
    {
        return new CompanyResource($this->config, $this->httpClient);
    }

    public function companyWebsites(): CompanyWebsiteResource
    {
        return new CompanyWebsiteResource($this->config, $this->httpClient);
    }

    public function covers(): CoverResource
    {
        return new CoverResource($this->config, $this->httpClient);
    }

    public function externalGames(): ExternalGameResource
    {
        return new ExternalGameResource($this->config, $this->httpClient);
    }

    public function franchises(): FranchiseResource
    {
        return new FranchiseResource($this->config, $this->httpClient);
    }

    public function gameEngineLogos(): GameEngineLogoResource
    {
        return new GameEngineLogoResource($this->config, $this->httpClient);
    }

    public function gameEngine(): GameEngineResource
    {
        return new GameEngineResource($this->config, $this->httpClient);
    }

    public function gameMode(): GameModeResource
    {
        return new GameModeResource($this->config, $this->httpClient);
    }

    public function game(): GameResource
    {
        return new GameResource($this->config, $this->httpClient);
    }

    public function gameVersionFeatures(): GameVersionFeatureResource
    {
        return new GameVersionFeatureResource($this->config, $this->httpClient);
    }

    public function gameVersionFeatureValues(): GameVersionFeatureValueResource
    {
        return new GameVersionFeatureValueResource($this->config, $this->httpClient);
    }

    public function gameVersion(): GameVersionResource
    {
        return new GameVersionResource($this->config, $this->httpClient);
    }

    public function gameVideos(): GameVideoResource
    {
        return new GameVideoResource($this->config, $this->httpClient);
    }

    public function genres(): GenreResource
    {
        return new GenreResource($this->config, $this->httpClient);
    }

    public function involvedCompanies(): InvolvedCompanyResource
    {
        return new InvolvedCompanyResource($this->config, $this->httpClient);
    }

    public function keywords(): KeywordResource
    {
        return new KeywordResource($this->config, $this->httpClient);
    }

    public function multiplayerModes(): MultiplayerModeResource
    {
        return new MultiplayerModeResource($this->config, $this->httpClient);
    }

    public function platformFamily(): PlatformFamilyResource
    {
        return new PlatformFamilyResource($this->config, $this->httpClient);
    }

    public function platformLogos(): PlatformLogoResource
    {
        return new PlatformLogoResource($this->config, $this->httpClient);
    }

    public function platforms(): PlatformResource
    {
        return new PlatformResource($this->config, $this->httpClient);
    }

    public function platformVersionCompanies(): PlatformVersionCompanyResource
    {
        return new PlatformVersionCompanyResource($this->config, $this->httpClient);
    }

    public function platformVersionReleaseDate(): PlatformVersionReleaseDateResource
    {
        return new PlatformVersionReleaseDateResource($this->config, $this->httpClient);
    }

    public function platformVersion(): PlatformVersionResource
    {
        return new PlatformVersionResource($this->config, $this->httpClient);
    }

    public function platformWebsite(): PlatformWebsiteResource
    {
        return new PlatformWebsiteResource($this->config, $this->httpClient);
    }

    public function playerPerspective(): PlayerPerspectiveResource
    {
        return new PlayerPerspectiveResource($this->config, $this->httpClient);
    }

    public function releaseDate(): ReleaseDateResource
    {
        return new ReleaseDateResource($this->config, $this->httpClient);
    }

    public function screenshots(): ScreenshotResource
    {
        return new ScreenshotResource($this->config, $this->httpClient);
    }

    public function search(): SearchResource
    {
        return new SearchResource($this->config, $this->httpClient);
    }

    public function themes(): ThemeResource
    {
        return new ThemeResource($this->config, $this->httpClient);
    }

    public function websites(): WebsiteResource
    {
        return new WebsiteResource($this->config, $this->httpClient);
    }
}
