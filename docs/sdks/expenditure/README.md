# expenditure

### Available Operations

* [expenditureList](#expenditurelist)
* [expenditureRetrieve](#expenditureretrieve)

## expenditureList

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \PropertyMeld\MeldAPI\MeldAPI;
use \PropertyMeld\MeldAPI\Models\Operations\ExpenditureListRequest;
use \PropertyMeld\MeldAPI\Models\Operations\ExpenditureListStatus;
use \PropertyMeld\MeldAPI\Models\Operations\ExpenditureListSecurity;

$sdk = MeldAPI::builder()
    ->build();

try {
    $request = new ExpenditureListRequest();
    $request->xPmOrg = 449950;
    $request->createdGte = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-05-22T05:33:50.280Z');
    $request->createdInterval = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-02-05T15:25:35.140Z');
    $request->createdLte = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-10-20T12:36:28.767Z');
    $request->limit = 60225;
    $request->offset = 969810;
    $request->ordering = 'est';
    $request->status = [
        ExpenditureListStatus::Hold,
        ExpenditureListStatus::Approved,
        ExpenditureListStatus::Billed,
    ];

    $requestSecurity = new ExpenditureListSecurity();
    $requestSecurity->pmoAuth2Authentication = '';

    $response = $sdk->expenditure->expenditureList($request, $requestSecurity);

    if ($response->paginatedMeldExpendituresListViewSerializerListList !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                             | Type                                                                                                                  | Required                                                                                                              | Description                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                            | [\PropertyMeld\MeldAPI\Models\Operations\ExpenditureListRequest](../../models/operations/ExpenditureListRequest.md)   | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |
| `security`                                                                                                            | [\PropertyMeld\MeldAPI\Models\Operations\ExpenditureListSecurity](../../models/operations/ExpenditureListSecurity.md) | :heavy_check_mark:                                                                                                    | The security requirements to use for the request.                                                                     |


### Response

**[?\PropertyMeld\MeldAPI\Models\Operations\ExpenditureListResponse](../../models/operations/ExpenditureListResponse.md)**


## expenditureRetrieve

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \PropertyMeld\MeldAPI\MeldAPI;
use \PropertyMeld\MeldAPI\Models\Operations\ExpenditureRetrieveRequest;
use \PropertyMeld\MeldAPI\Models\Operations\ExpenditureRetrieveSecurity;

$sdk = MeldAPI::builder()
    ->build();

try {
    $request = new ExpenditureRetrieveRequest();
    $request->xPmOrg = 358152;
    $request->id = '2c595590-7aff-41a3-a2fa-9467739251aa';

    $requestSecurity = new ExpenditureRetrieveSecurity();
    $requestSecurity->pmoAuth2Authentication = '';

    $response = $sdk->expenditure->expenditureRetrieve($request, $requestSecurity);

    if ($response->meldExpendituresListViewSerializerDetail !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                     | Type                                                                                                                          | Required                                                                                                                      | Description                                                                                                                   |
| ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                    | [\PropertyMeld\MeldAPI\Models\Operations\ExpenditureRetrieveRequest](../../models/operations/ExpenditureRetrieveRequest.md)   | :heavy_check_mark:                                                                                                            | The request object to use for the request.                                                                                    |
| `security`                                                                                                                    | [\PropertyMeld\MeldAPI\Models\Operations\ExpenditureRetrieveSecurity](../../models/operations/ExpenditureRetrieveSecurity.md) | :heavy_check_mark:                                                                                                            | The security requirements to use for the request.                                                                             |


### Response

**[?\PropertyMeld\MeldAPI\Models\Operations\ExpenditureRetrieveResponse](../../models/operations/ExpenditureRetrieveResponse.md)**

