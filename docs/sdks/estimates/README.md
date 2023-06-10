# estimates

### Available Operations

* [estimatesList](#estimateslist)
* [estimatesRetrieve](#estimatesretrieve)

## estimatesList

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \PropertyMeld\MeldAPI\MeldAPI;
use \PropertyMeld\MeldAPI\Models\Operations\EstimatesListRequest;
use \PropertyMeld\MeldAPI\Models\Operations\EstimatesListEstimateStatus;
use \PropertyMeld\MeldAPI\Models\Operations\EstimatesListSecurity;

$sdk = MeldAPI::builder()
    ->build();

try {
    $request = new EstimatesListRequest();
    $request->xPmOrg = 978619;
    $request->estimateStatus = [
        EstimatesListEstimateStatus::EstimateSubmitted,
        EstimatesListEstimateStatus::EstimateSubmitted,
    ];
    $request->limit = 461479;
    $request->offset = 520478;
    $request->ordering = 'porro';

    $requestSecurity = new EstimatesListSecurity();
    $requestSecurity->pmoAuth2Authentication = '';

    $response = $sdk->estimates->estimatesList($request, $requestSecurity);

    if ($response->paginatedEstimateSerializerListList !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                         | Type                                                                                                              | Required                                                                                                          | Description                                                                                                       |
| ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                        | [\PropertyMeld\MeldAPI\Models\Operations\EstimatesListRequest](../../models/operations/EstimatesListRequest.md)   | :heavy_check_mark:                                                                                                | The request object to use for the request.                                                                        |
| `security`                                                                                                        | [\PropertyMeld\MeldAPI\Models\Operations\EstimatesListSecurity](../../models/operations/EstimatesListSecurity.md) | :heavy_check_mark:                                                                                                | The security requirements to use for the request.                                                                 |


### Response

**[?\PropertyMeld\MeldAPI\Models\Operations\EstimatesListResponse](../../models/operations/EstimatesListResponse.md)**


## estimatesRetrieve

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \PropertyMeld\MeldAPI\MeldAPI;
use \PropertyMeld\MeldAPI\Models\Operations\EstimatesRetrieveRequest;
use \PropertyMeld\MeldAPI\Models\Operations\EstimatesRetrieveSecurity;

$sdk = MeldAPI::builder()
    ->build();

try {
    $request = new EstimatesRetrieveRequest();
    $request->xPmOrg = 678880;
    $request->id = '1ba928fc-8167-442c-b739-205929396fea';

    $requestSecurity = new EstimatesRetrieveSecurity();
    $requestSecurity->pmoAuth2Authentication = '';

    $response = $sdk->estimates->estimatesRetrieve($request, $requestSecurity);

    if ($response->estimateSerializerDetail !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                 | Type                                                                                                                      | Required                                                                                                                  | Description                                                                                                               |
| ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                | [\PropertyMeld\MeldAPI\Models\Operations\EstimatesRetrieveRequest](../../models/operations/EstimatesRetrieveRequest.md)   | :heavy_check_mark:                                                                                                        | The request object to use for the request.                                                                                |
| `security`                                                                                                                | [\PropertyMeld\MeldAPI\Models\Operations\EstimatesRetrieveSecurity](../../models/operations/EstimatesRetrieveSecurity.md) | :heavy_check_mark:                                                                                                        | The security requirements to use for the request.                                                                         |


### Response

**[?\PropertyMeld\MeldAPI\Models\Operations\EstimatesRetrieveResponse](../../models/operations/EstimatesRetrieveResponse.md)**

