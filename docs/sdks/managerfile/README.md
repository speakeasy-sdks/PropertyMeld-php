# managerFile

### Available Operations

* [managerFileList](#managerfilelist)

## managerFileList

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \PropertyMeld\MeldAPI\MeldAPI;
use \PropertyMeld\MeldAPI\Models\Operations\ManagerFileListRequest;
use \PropertyMeld\MeldAPI\Models\Operations\ManagerFileListSecurity;

$sdk = MeldAPI::builder()
    ->build();

try {
    $request = new ManagerFileListRequest();
    $request->xPmOrg = 968962;
    $request->limit = 652103;
    $request->offset = 320997;
    $request->ordering = 'eum';

    $requestSecurity = new ManagerFileListSecurity();
    $requestSecurity->pmoAuth2Authentication = '';

    $response = $sdk->managerFile->managerFileList($request, $requestSecurity);

    if ($response->paginatedMeldFileList !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                             | Type                                                                                                                  | Required                                                                                                              | Description                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                            | [\PropertyMeld\MeldAPI\Models\Operations\ManagerFileListRequest](../../models/operations/ManagerFileListRequest.md)   | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |
| `security`                                                                                                            | [\PropertyMeld\MeldAPI\Models\Operations\ManagerFileListSecurity](../../models/operations/ManagerFileListSecurity.md) | :heavy_check_mark:                                                                                                    | The security requirements to use for the request.                                                                     |


### Response

**[?\PropertyMeld\MeldAPI\Models\Operations\ManagerFileListResponse](../../models/operations/ManagerFileListResponse.md)**

