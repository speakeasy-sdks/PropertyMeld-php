<!-- Start SDK Example Usage -->
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
    $request->xPmOrg = 548814;
    $request->limit = 592845;
    $request->offset = 715190;
    $request->ordering = 'quibusdam';

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
<!-- End SDK Example Usage -->