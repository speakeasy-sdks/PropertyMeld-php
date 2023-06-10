# workLog

### Available Operations

* [workLogList](#workloglist)
* [workLogRetrieve](#worklogretrieve)

## workLogList

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \PropertyMeld\MeldAPI\MeldAPI;
use \PropertyMeld\MeldAPI\Models\Operations\WorkLogListRequest;
use \PropertyMeld\MeldAPI\Models\Operations\WorkLogListSecurity;

$sdk = MeldAPI::builder()
    ->build();

try {
    $request = new WorkLogListRequest();
    $request->xPmOrg = 491201;
    $request->limit = 729828;
    $request->offset = 72350;
    $request->ordering = 'ab';

    $requestSecurity = new WorkLogListSecurity();
    $requestSecurity->pmoAuth2Authentication = '';

    $response = $sdk->workLog->workLogList($request, $requestSecurity);

    if ($response->paginatedWorkEntrySerializerListList !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                     | Type                                                                                                          | Required                                                                                                      | Description                                                                                                   |
| ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                    | [\PropertyMeld\MeldAPI\Models\Operations\WorkLogListRequest](../../models/operations/WorkLogListRequest.md)   | :heavy_check_mark:                                                                                            | The request object to use for the request.                                                                    |
| `security`                                                                                                    | [\PropertyMeld\MeldAPI\Models\Operations\WorkLogListSecurity](../../models/operations/WorkLogListSecurity.md) | :heavy_check_mark:                                                                                            | The security requirements to use for the request.                                                             |


### Response

**[?\PropertyMeld\MeldAPI\Models\Operations\WorkLogListResponse](../../models/operations/WorkLogListResponse.md)**


## workLogRetrieve

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \PropertyMeld\MeldAPI\MeldAPI;
use \PropertyMeld\MeldAPI\Models\Operations\WorkLogRetrieveRequest;
use \PropertyMeld\MeldAPI\Models\Operations\WorkLogRetrieveSecurity;

$sdk = MeldAPI::builder()
    ->build();

try {
    $request = new WorkLogRetrieveRequest();
    $request->xPmOrg = 280114;
    $request->id = 'eeb52ff7-85fc-4378-94d4-c98e0c2bb89e';

    $requestSecurity = new WorkLogRetrieveSecurity();
    $requestSecurity->pmoAuth2Authentication = '';

    $response = $sdk->workLog->workLogRetrieve($request, $requestSecurity);

    if ($response->workEntrySerializerDetail !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                             | Type                                                                                                                  | Required                                                                                                              | Description                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                            | [\PropertyMeld\MeldAPI\Models\Operations\WorkLogRetrieveRequest](../../models/operations/WorkLogRetrieveRequest.md)   | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |
| `security`                                                                                                            | [\PropertyMeld\MeldAPI\Models\Operations\WorkLogRetrieveSecurity](../../models/operations/WorkLogRetrieveSecurity.md) | :heavy_check_mark:                                                                                                    | The security requirements to use for the request.                                                                     |


### Response

**[?\PropertyMeld\MeldAPI\Models\Operations\WorkLogRetrieveResponse](../../models/operations/WorkLogRetrieveResponse.md)**

