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
    $request->ackApproval = MeldListAckApproval::FALSE;
    $request->assignedToMe = 'odit';
    $request->categories = MeldListCategories::GENERAL;
    $request->commentsGte = 'quasi';
    $request->commentsLte = 'iure';
    $request->completedGte = 'doloribus';
    $request->completedInterval = 'debitis';
    $request->completedLte = 'eius';
    $request->createdGte = 'maxime';
    $request->createdInterval = 'deleniti';
    $request->createdLte = 'facilis';
    $request->createdOffsetLte = 'in';
    $request->dueDateChoice = MeldListDueDateChoice::OVERDUE;
    $request->dueDateGte = 'architecto';
    $request->dueDateLte = 'repudiandae';
    $request->everBeenAssigned = MeldListEverBeenAssigned::TRUE;
    $request->exp = MeldListExp::FALSE;
    $request->expS = 'nihil';
    $request->filesGte = 'repellat';
    $request->filesLte = 'quibusdam';
    $request->hasEstimates = MeldListHasEstimates::FALSE;
    $request->invoiceS = 'saepe';
    $request->limit = 868126;
    $request->maint = 'accusantium';
    $request->maintType = MeldListMaintType::ONE;
    $request->markedCompleteGte = 'praesentium';
    $request->markedCompleteInterval = 'natus';
    $request->markedCompleteLte = 'magni';
    $request->meldinvoice = MeldListMeldinvoice::TRUE;
    $request->offset = 779051;
    $request->orderBy = MeldListOrderBy::MINUS_OWNER_APPROVAL_REQUEST_DATE;
    $request->ownerApproval = MeldListOwnerApproval::OWNER_APPROVAL_REQUESTED_ESTIMATES;
    $request->pg = 'maxime';
    $request->priority = MeldListPriority::MEDIUM;
    $request->project = 'excepturi';
    $request->projectAssigned = MeldListProjectAssigned::TRUE;
    $request->prop = 'ea';
    $request->rating = MeldListRating::ONE;
    $request->recurring = MeldListRecurring::TRUE;
    $request->recurringMeld = 'maiores';
    $request->remindees = 'quidem';
    $request->reminderChoice = MeldListReminderChoice::TODAY;
    $request->reminderGte = 'voluptate';
    $request->reminderLte = 'autem';
    $request->scheduledGte = 'nam';
    $request->scheduledInterval = 'eaque';
    $request->scheduledLte = 'pariatur';
    $request->scheduling = 'nemo';
    $request->status = MeldListStatus::PENDING_ASSIGNMENT;
    $request->tags = 'perferendis';
    $request->tagsEx = 'fugiat';
    $request->tpr = MeldListTpr::FALSE;
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
