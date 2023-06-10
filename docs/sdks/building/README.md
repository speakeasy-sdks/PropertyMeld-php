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

### Parameters

| Parameter                                                                                                       | Type                                                                                                            | Required                                                                                                        | Description                                                                                                     |
| --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                      | [\PropertyMeld\MeldAPI\Models\Operations\BuildingListRequest](../../models/operations/BuildingListRequest.md)   | :heavy_check_mark:                                                                                              | The request object to use for the request.                                                                      |
| `security`                                                                                                      | [\PropertyMeld\MeldAPI\Models\Operations\BuildingListSecurity](../../models/operations/BuildingListSecurity.md) | :heavy_check_mark:                                                                                              | The security requirements to use for the request.                                                               |


### Response

**[?\PropertyMeld\MeldAPI\Models\Operations\BuildingListResponse](../../models/operations/BuildingListResponse.md)**


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

### Parameters

| Parameter                                                                                                               | Type                                                                                                                    | Required                                                                                                                | Description                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                              | [\PropertyMeld\MeldAPI\Models\Operations\BuildingRetrieveRequest](../../models/operations/BuildingRetrieveRequest.md)   | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |
| `security`                                                                                                              | [\PropertyMeld\MeldAPI\Models\Operations\BuildingRetrieveSecurity](../../models/operations/BuildingRetrieveSecurity.md) | :heavy_check_mark:                                                                                                      | The security requirements to use for the request.                                                                       |


### Response

**[?\PropertyMeld\MeldAPI\Models\Operations\BuildingRetrieveResponse](../../models/operations/BuildingRetrieveResponse.md)**

