# residentFile

### Available Operations

* [residentFileList](#residentfilelist)

## residentFileList

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \PropertyMeld\MeldAPI\MeldAPI;
use \PropertyMeld\MeldAPI\Models\Operations\ResidentFileListRequest;
use \PropertyMeld\MeldAPI\Models\Operations\ResidentFileListSecurity;

$sdk = MeldAPI::builder()
    ->build();

try {
    $request = new ResidentFileListRequest();
    $request->xPmOrg = 487676;
    $request->limit = 144691;
    $request->offset = 545;
    $request->ordering = 'magni';

    $requestSecurity = new ResidentFileListSecurity();
    $requestSecurity->pmoAuth2Authentication = '';

    $response = $sdk->residentFile->residentFileList($request, $requestSecurity);

    if ($response->paginatedTenantMeldFileList !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                               | Type                                                                                                                    | Required                                                                                                                | Description                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                              | [\PropertyMeld\MeldAPI\Models\Operations\ResidentFileListRequest](../../models/operations/ResidentFileListRequest.md)   | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |
| `security`                                                                                                              | [\PropertyMeld\MeldAPI\Models\Operations\ResidentFileListSecurity](../../models/operations/ResidentFileListSecurity.md) | :heavy_check_mark:                                                                                                      | The security requirements to use for the request.                                                                       |


### Response

**[?\PropertyMeld\MeldAPI\Models\Operations\ResidentFileListResponse](../../models/operations/ResidentFileListResponse.md)**

