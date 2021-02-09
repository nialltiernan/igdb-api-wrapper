# Wrapper for IGDB API v4
This is a PHP wrapper for v4 of the [IGDB API](https://api-docs.igdb.com/#about)

## Basic installation
You can install this package via composer using:
```shell
composer require nellyt/idgb-api-sdk
```

## Usage
```php
require ('vendor/autoload.php');

$config = new \Igdb\Config($clientId, $accessToken);
$client = new \Igdb\ApiClient($config);

$response = $client->games()->fetch('fields name, summary; where id = 25;');

$response->getResponse()->getStatusCode();

$response->getData();
```

### Resources
There are resources for each API endpoint. Here is the list of available resources
1. AgeRating
2. AgeRatingContentDescription
3. AlternativeName
4. Artwork
5. Character
6. CharacterMugShot
7. Collection
8. Company
9. CompanyLogo
10. CompanyWebsite
11. Cover
12. ExternalGame
13. Franchise
14. Game
15. GameEngine
16. GameEngineLogo
17. GameMode
18. GameVersion
19. GameVersionFeature
20. GameVersionFeatureValue
21. GameVideo
22. Genre
23. InvolvedCompany
24. Keyword
25. MultiplayerMode
26. Platform
27. PlatformFamily
28. PlatformLogo
29. PlatformVersion
30. PlatformVersionCompany
31. PlatformVersionReleaseDate
32. PlatformWebsite
33. PlayerPerspective
34. ReleaseDate
35. Screenshot
36. Search
37. Theme
38. Website
