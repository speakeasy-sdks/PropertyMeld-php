# floor

### Available Operations

* [floorList](#floorlist)
* [floorRetrieve](#floorretrieve)

## floorList

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \PropertyMeld\MeldAPI\MeldAPI;
use \PropertyMeld\MeldAPI\Models\Operations\FloorListRequest;
use \PropertyMeld\MeldAPI\Models\Operations\FloorListSecurity;

$sdk = MeldAPI::builder()
    ->build();

try {
    $request = new FloorListRequest();
    $request->xPmOrg = 317202;
    $request->limit = 138183;
    $request->offset = 778346;
    $request->ordering = 'sequi';

    $requestSecurity = new FloorListSecurity();
    $requestSecurity->pmoAuth2Authentication = '';

    $response = $sdk->floor->floorList($request, $requestSecurity);

    if ($response->paginatedFloorSerializerListList !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## floorRetrieve

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \PropertyMeld\MeldAPI\MeldAPI;
use \PropertyMeld\MeldAPI\Models\Operations\FloorRetrieveRequest;
use \PropertyMeld\MeldAPI\Models\Operations\FloorRetrieveSecurity;

$sdk = MeldAPI::builder()
    ->build();

try {
    $request = new FloorRetrieveRequest();
    $request->xPmOrg = 949572;
    $request->id = '5ad019da-1ffe-478f-897b-0074f15471b5';

    $requestSecurity = new FloorRetrieveSecurity();
    $requestSecurity->pmoAuth2Authentication = '';

    $response = $sdk->floor->floorRetrieve($request, $requestSecurity);

    if ($response->floorSerializerDetail !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```
