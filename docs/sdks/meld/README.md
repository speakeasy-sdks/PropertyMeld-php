# meld

### Available Operations

* [meldList](#meldlist)
* [meldManagerFilesList](#meldmanagerfileslist)
* [meldRetrieve](#meldretrieve)
* [meldTenantFilesList](#meldtenantfileslist)
* [meldVendorFilesList](#meldvendorfileslist)

## meldList

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \PropertyMeld\MeldAPI\MeldAPI;
use \PropertyMeld\MeldAPI\Models\Operations\MeldListRequest;
use \PropertyMeld\MeldAPI\Models\Operations\MeldListAckApproval;
use \PropertyMeld\MeldAPI\Models\Operations\MeldListCategories;
use \PropertyMeld\MeldAPI\Models\Operations\MeldListDueDateChoice;
use \PropertyMeld\MeldAPI\Models\Operations\MeldListEverBeenAssigned;
use \PropertyMeld\MeldAPI\Models\Operations\MeldListExp;
use \PropertyMeld\MeldAPI\Models\Operations\MeldListHasEstimates;
use \PropertyMeld\MeldAPI\Models\Operations\MeldListMaintType;
use \PropertyMeld\MeldAPI\Models\Operations\MeldListMeldinvoice;
use \PropertyMeld\MeldAPI\Models\Operations\MeldListOrderBy;
use \PropertyMeld\MeldAPI\Models\Operations\MeldListOwnerApproval;
use \PropertyMeld\MeldAPI\Models\Operations\MeldListPriority;
use \PropertyMeld\MeldAPI\Models\Operations\MeldListProjectAssigned;
use \PropertyMeld\MeldAPI\Models\Operations\MeldListRating;
use \PropertyMeld\MeldAPI\Models\Operations\MeldListRecurring;
use \PropertyMeld\MeldAPI\Models\Operations\MeldListReminderChoice;
use \PropertyMeld\MeldAPI\Models\Operations\MeldListStatus;
use \PropertyMeld\MeldAPI\Models\Operations\MeldListTpr;
use \PropertyMeld\MeldAPI\Models\Operations\MeldListSecurity;

$sdk = MeldAPI::builder()
    ->build();

try {
    $request = new MeldListRequest();
    $request->xPmOrg = 221262;
    $request->ackApproval = MeldListAckApproval::False;
    $request->assignedToMe = 'odit';
    $request->categories = MeldListCategories::General;
    $request->commentsGte = 'quasi';
    $request->commentsLte = 'iure';
    $request->completedGte = 'doloribus';
    $request->completedInterval = 'debitis';
    $request->completedLte = 'eius';
    $request->createdGte = 'maxime';
    $request->createdInterval = 'deleniti';
    $request->createdLte = 'facilis';
    $request->createdOffsetLte = 'in';
    $request->dueDateChoice = MeldListDueDateChoice::Overdue;
    $request->dueDateGte = 'architecto';
    $request->dueDateLte = 'repudiandae';
    $request->everBeenAssigned = MeldListEverBeenAssigned::True;
    $request->exp = MeldListExp::False;
    $request->expS = 'nihil';
    $request->filesGte = 'repellat';
    $request->filesLte = 'quibusdam';
    $request->hasEstimates = MeldListHasEstimates::False;
    $request->invoiceS = 'saepe';
    $request->limit = 868126;
    $request->maint = 'accusantium';
    $request->maintType = MeldListMaintType::One;
    $request->markedCompleteGte = 'praesentium';
    $request->markedCompleteInterval = 'natus';
    $request->markedCompleteLte = 'magni';
    $request->meldinvoice = MeldListMeldinvoice::True;
    $request->offset = 779051;
    $request->orderBy = MeldListOrderBy::MinusOwnerApprovalRequestDate;
    $request->ownerApproval = MeldListOwnerApproval::OwnerApprovalRequestedEstimates;
    $request->pg = 'maxime';
    $request->priority = MeldListPriority::Medium;
    $request->project = 'excepturi';
    $request->projectAssigned = MeldListProjectAssigned::True;
    $request->prop = 'ea';
    $request->rating = MeldListRating::One;
    $request->recurring = MeldListRecurring::True;
    $request->recurringMeld = 'maiores';
    $request->remindees = 'quidem';
    $request->reminderChoice = MeldListReminderChoice::Today;
    $request->reminderGte = 'voluptate';
    $request->reminderLte = 'autem';
    $request->scheduledGte = 'nam';
    $request->scheduledInterval = 'eaque';
    $request->scheduledLte = 'pariatur';
    $request->scheduling = 'nemo';
    $request->status = MeldListStatus::PendingAssignment;
    $request->tags = 'perferendis';
    $request->tagsEx = 'fugiat';
    $request->tpr = MeldListTpr::False;
    $request->unit = 'aut';
    $request->updatedGte = 'cumque';
    $request->updatedInterval = 'corporis';
    $request->updatedLte = 'hic';
    $request->updatedOffsetLte = 'libero';
    $request->vendorScheduledGte = 'nobis';
    $request->vendorScheduledInterval = 'dolores';
    $request->vendorScheduledLte = 'quis';
    $request->wlGte = 'totam';
    $request->wlLte = 'dignissimos';

    $requestSecurity = new MeldListSecurity();
    $requestSecurity->pmoAuth2Authentication = '';

    $response = $sdk->meld->meldList($request, $requestSecurity);

    if ($response->paginatedMeldSerializerListList !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                               | Type                                                                                                    | Required                                                                                                | Description                                                                                             |
| ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                              | [\PropertyMeld\MeldAPI\Models\Operations\MeldListRequest](../../models/operations/MeldListRequest.md)   | :heavy_check_mark:                                                                                      | The request object to use for the request.                                                              |
| `security`                                                                                              | [\PropertyMeld\MeldAPI\Models\Operations\MeldListSecurity](../../models/operations/MeldListSecurity.md) | :heavy_check_mark:                                                                                      | The security requirements to use for the request.                                                       |


### Response

**[?\PropertyMeld\MeldAPI\Models\Operations\MeldListResponse](../../models/operations/MeldListResponse.md)**


## meldManagerFilesList

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \PropertyMeld\MeldAPI\MeldAPI;
use \PropertyMeld\MeldAPI\Models\Operations\MeldManagerFilesListRequest;
use \PropertyMeld\MeldAPI\Models\Operations\MeldManagerFilesListSecurity;

$sdk = MeldAPI::builder()
    ->build();

try {
    $request = new MeldManagerFilesListRequest();
    $request->xPmOrg = 54338;
    $request->id = '53202c73-d5fe-49b9-8c28-909b3fe49a8d';
    $request->limit = 589910;
    $request->offset = 750844;
    $request->ordering = 'libero';

    $requestSecurity = new MeldManagerFilesListSecurity();
    $requestSecurity->pmoAuth2Authentication = '';

    $response = $sdk->meld->meldManagerFilesList($request, $requestSecurity);

    if ($response->paginatedPMApiMeldfileList !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                       | Type                                                                                                                            | Required                                                                                                                        | Description                                                                                                                     |
| ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                      | [\PropertyMeld\MeldAPI\Models\Operations\MeldManagerFilesListRequest](../../models/operations/MeldManagerFilesListRequest.md)   | :heavy_check_mark:                                                                                                              | The request object to use for the request.                                                                                      |
| `security`                                                                                                                      | [\PropertyMeld\MeldAPI\Models\Operations\MeldManagerFilesListSecurity](../../models/operations/MeldManagerFilesListSecurity.md) | :heavy_check_mark:                                                                                                              | The security requirements to use for the request.                                                                               |


### Response

**[?\PropertyMeld\MeldAPI\Models\Operations\MeldManagerFilesListResponse](../../models/operations/MeldManagerFilesListResponse.md)**


## meldRetrieve

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \PropertyMeld\MeldAPI\MeldAPI;
use \PropertyMeld\MeldAPI\Models\Operations\MeldRetrieveRequest;
use \PropertyMeld\MeldAPI\Models\Operations\MeldRetrieveSecurity;

$sdk = MeldAPI::builder()
    ->build();

try {
    $request = new MeldRetrieveRequest();
    $request->xPmOrg = 964490;
    $request->id = '48633323-f9b7-47f3-a410-0674ebf69280';

    $requestSecurity = new MeldRetrieveSecurity();
    $requestSecurity->pmoAuth2Authentication = '';

    $response = $sdk->meld->meldRetrieve($request, $requestSecurity);

    if ($response->meldSerializerDetail !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                       | Type                                                                                                            | Required                                                                                                        | Description                                                                                                     |
| --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                      | [\PropertyMeld\MeldAPI\Models\Operations\MeldRetrieveRequest](../../models/operations/MeldRetrieveRequest.md)   | :heavy_check_mark:                                                                                              | The request object to use for the request.                                                                      |
| `security`                                                                                                      | [\PropertyMeld\MeldAPI\Models\Operations\MeldRetrieveSecurity](../../models/operations/MeldRetrieveSecurity.md) | :heavy_check_mark:                                                                                              | The security requirements to use for the request.                                                               |


### Response

**[?\PropertyMeld\MeldAPI\Models\Operations\MeldRetrieveResponse](../../models/operations/MeldRetrieveResponse.md)**


## meldTenantFilesList

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \PropertyMeld\MeldAPI\MeldAPI;
use \PropertyMeld\MeldAPI\Models\Operations\MeldTenantFilesListRequest;
use \PropertyMeld\MeldAPI\Models\Operations\MeldTenantFilesListSecurity;

$sdk = MeldAPI::builder()
    ->build();

try {
    $request = new MeldTenantFilesListRequest();
    $request->xPmOrg = 854614;
    $request->id = '1ba77a89-ebf7-437a-a420-3ce5e6a95d8a';
    $request->limit = 55;
    $request->offset = 872651;
    $request->ordering = 'quaerat';

    $requestSecurity = new MeldTenantFilesListSecurity();
    $requestSecurity->pmoAuth2Authentication = '';

    $response = $sdk->meld->meldTenantFilesList($request, $requestSecurity);

    if ($response->paginatedPmAPITenantMeldList !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                     | Type                                                                                                                          | Required                                                                                                                      | Description                                                                                                                   |
| ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                    | [\PropertyMeld\MeldAPI\Models\Operations\MeldTenantFilesListRequest](../../models/operations/MeldTenantFilesListRequest.md)   | :heavy_check_mark:                                                                                                            | The request object to use for the request.                                                                                    |
| `security`                                                                                                                    | [\PropertyMeld\MeldAPI\Models\Operations\MeldTenantFilesListSecurity](../../models/operations/MeldTenantFilesListSecurity.md) | :heavy_check_mark:                                                                                                            | The security requirements to use for the request.                                                                             |


### Response

**[?\PropertyMeld\MeldAPI\Models\Operations\MeldTenantFilesListResponse](../../models/operations/MeldTenantFilesListResponse.md)**


## meldVendorFilesList

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \PropertyMeld\MeldAPI\MeldAPI;
use \PropertyMeld\MeldAPI\Models\Operations\MeldVendorFilesListRequest;
use \PropertyMeld\MeldAPI\Models\Operations\MeldVendorFilesListSecurity;

$sdk = MeldAPI::builder()
    ->build();

try {
    $request = new MeldVendorFilesListRequest();
    $request->xPmOrg = 273542;
    $request->id = '6ce2af7a-73cf-43be-853f-870b326b5a73';
    $request->limit = 277628;
    $request->offset = 186458;
    $request->ordering = 'cupiditate';

    $requestSecurity = new MeldVendorFilesListSecurity();
    $requestSecurity->pmoAuth2Authentication = '';

    $response = $sdk->meld->meldVendorFilesList($request, $requestSecurity);

    if ($response->paginatedPMApiVendorMeldFileList !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                     | Type                                                                                                                          | Required                                                                                                                      | Description                                                                                                                   |
| ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                    | [\PropertyMeld\MeldAPI\Models\Operations\MeldVendorFilesListRequest](../../models/operations/MeldVendorFilesListRequest.md)   | :heavy_check_mark:                                                                                                            | The request object to use for the request.                                                                                    |
| `security`                                                                                                                    | [\PropertyMeld\MeldAPI\Models\Operations\MeldVendorFilesListSecurity](../../models/operations/MeldVendorFilesListSecurity.md) | :heavy_check_mark:                                                                                                            | The security requirements to use for the request.                                                                             |


### Response

**[?\PropertyMeld\MeldAPI\Models\Operations\MeldVendorFilesListResponse](../../models/operations/MeldVendorFilesListResponse.md)**

