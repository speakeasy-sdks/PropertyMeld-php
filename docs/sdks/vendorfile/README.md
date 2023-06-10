# vendorFile

### Available Operations

* [vendorFileList](#vendorfilelist)

## vendorFileList

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \PropertyMeld\MeldAPI\MeldAPI;
use \PropertyMeld\MeldAPI\Models\Operations\VendorFileListRequest;
use \PropertyMeld\MeldAPI\Models\Operations\VendorFileListSecurity;

$sdk = MeldAPI::builder()
    ->build();

try {
    $request = new VendorFileListRequest();
    $request->xPmOrg = 480061;
    $request->limit = 664965;
    $request->offset = 522176;
    $request->ordering = 'eligendi';

    $requestSecurity = new VendorFileListSecurity();
    $requestSecurity->pmoAuth2Authentication = '';

    $response = $sdk->vendorFile->vendorFileList($request, $requestSecurity);

    if ($response->paginatedVendorMeldFileList !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                           | Type                                                                                                                | Required                                                                                                            | Description                                                                                                         |
| ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                          | [\PropertyMeld\MeldAPI\Models\Operations\VendorFileListRequest](../../models/operations/VendorFileListRequest.md)   | :heavy_check_mark:                                                                                                  | The request object to use for the request.                                                                          |
| `security`                                                                                                          | [\PropertyMeld\MeldAPI\Models\Operations\VendorFileListSecurity](../../models/operations/VendorFileListSecurity.md) | :heavy_check_mark:                                                                                                  | The security requirements to use for the request.                                                                   |


### Response

**[?\PropertyMeld\MeldAPI\Models\Operations\VendorFileListResponse](../../models/operations/VendorFileListResponse.md)**

