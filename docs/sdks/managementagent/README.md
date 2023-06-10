# managementAgent

### Available Operations

* [managementAgentList](#managementagentlist)
* [managementAgentRetrieve](#managementagentretrieve)

## managementAgentList

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \PropertyMeld\MeldAPI\MeldAPI;
use \PropertyMeld\MeldAPI\Models\Operations\ManagementAgentListRequest;
use \PropertyMeld\MeldAPI\Models\Operations\ManagementAgentListSecurity;

$sdk = MeldAPI::builder()
    ->build();

try {
    $request = new ManagementAgentListRequest();
    $request->xPmOrg = 588465;
    $request->limit = 725255;
    $request->offset = 659669;
    $request->ordering = 'blanditiis';

    $requestSecurity = new ManagementAgentListSecurity();
    $requestSecurity->pmoAuth2Authentication = '';

    $response = $sdk->managementAgent->managementAgentList($request, $requestSecurity);

    if ($response->paginatedManagementAgentSerializerListList !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                     | Type                                                                                                                          | Required                                                                                                                      | Description                                                                                                                   |
| ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                    | [\PropertyMeld\MeldAPI\Models\Operations\ManagementAgentListRequest](../../models/operations/ManagementAgentListRequest.md)   | :heavy_check_mark:                                                                                                            | The request object to use for the request.                                                                                    |
| `security`                                                                                                                    | [\PropertyMeld\MeldAPI\Models\Operations\ManagementAgentListSecurity](../../models/operations/ManagementAgentListSecurity.md) | :heavy_check_mark:                                                                                                            | The security requirements to use for the request.                                                                             |


### Response

**[?\PropertyMeld\MeldAPI\Models\Operations\ManagementAgentListResponse](../../models/operations/ManagementAgentListResponse.md)**


## managementAgentRetrieve

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \PropertyMeld\MeldAPI\MeldAPI;
use \PropertyMeld\MeldAPI\Models\Operations\ManagementAgentRetrieveRequest;
use \PropertyMeld\MeldAPI\Models\Operations\ManagementAgentRetrieveSecurity;

$sdk = MeldAPI::builder()
    ->build();

try {
    $request = new ManagementAgentRetrieveRequest();
    $request->xPmOrg = 533206;
    $request->id = 'f3a66997-074b-4a44-a9b6-e2141959890a';

    $requestSecurity = new ManagementAgentRetrieveSecurity();
    $requestSecurity->pmoAuth2Authentication = '';

    $response = $sdk->managementAgent->managementAgentRetrieve($request, $requestSecurity);

    if ($response->managementAgentSerializerDetail !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                             | Type                                                                                                                                  | Required                                                                                                                              | Description                                                                                                                           |
| ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                            | [\PropertyMeld\MeldAPI\Models\Operations\ManagementAgentRetrieveRequest](../../models/operations/ManagementAgentRetrieveRequest.md)   | :heavy_check_mark:                                                                                                                    | The request object to use for the request.                                                                                            |
| `security`                                                                                                                            | [\PropertyMeld\MeldAPI\Models\Operations\ManagementAgentRetrieveSecurity](../../models/operations/ManagementAgentRetrieveSecurity.md) | :heavy_check_mark:                                                                                                                    | The security requirements to use for the request.                                                                                     |


### Response

**[?\PropertyMeld\MeldAPI\Models\Operations\ManagementAgentRetrieveResponse](../../models/operations/ManagementAgentRetrieveResponse.md)**

