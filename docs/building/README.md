# building

### Available Operations

* [buildingList](#buildinglist)
* [buildingRetrieve](#buildingretrieve)

## buildingList

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \PropertyMeld\MeldAPI\MeldAPI;
use \PropertyMeld\MeldAPI\Models\Operations\BuildingListRequest;
use \PropertyMeld\MeldAPI\Models\Operations\BuildingListSecurity;

$sdk = MeldAPI::builder()
    ->build();

try {
    $request = new BuildingListRequest();
    $request->xPmOrg = 602763;
    $request->limit = 857946;
    $request->offset = 544883;
    $request->ordering = 'illum';

    $requestSecurity = new BuildingListSecurity();
    $requestSecurity->pmoAuth2Authentication = '';

    $response = $sdk->building->buildingList($request, $requestSecurity);

    if ($response->paginatedBuildingSerializerListList !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## buildingRetrieve

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \PropertyMeld\MeldAPI\MeldAPI;
use \PropertyMeld\MeldAPI\Models\Operations\BuildingRetrieveRequest;
use \PropertyMeld\MeldAPI\Models\Operations\BuildingRetrieveSecurity;

$sdk = MeldAPI::builder()
    ->build();

try {
    $request = new BuildingRetrieveRequest();
    $request->xPmOrg = 423655;
    $request->id = '9a674e0f-467c-4c87-96ed-151a05dfc2dd';

    $requestSecurity = new BuildingRetrieveSecurity();
    $requestSecurity->pmoAuth2Authentication = '';

    $response = $sdk->building->buildingRetrieve($request, $requestSecurity);

    if ($response->buildingSerializerDetail !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```
