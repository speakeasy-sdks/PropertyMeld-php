# project

### Available Operations

* [projectList](#projectlist)
* [projectRetrieve](#projectretrieve)

## projectList

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \PropertyMeld\MeldAPI\MeldAPI;
use \PropertyMeld\MeldAPI\Models\Operations\ProjectListRequest;
use \PropertyMeld\MeldAPI\Models\Operations\ProjectListSecurity;

$sdk = MeldAPI::builder()
    ->build();

try {
    $request = new ProjectListRequest();
    $request->xPmOrg = 731398;
    $request->limit = 240020;
    $request->offset = 766964;
    $request->ordering = 'consequuntur';

    $requestSecurity = new ProjectListSecurity();
    $requestSecurity->pmoAuth2Authentication = '';

    $response = $sdk->project->projectList($request, $requestSecurity);

    if ($response->paginatedProjectListViewList !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## projectRetrieve

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \PropertyMeld\MeldAPI\MeldAPI;
use \PropertyMeld\MeldAPI\Models\Operations\ProjectRetrieveRequest;
use \PropertyMeld\MeldAPI\Models\Operations\ProjectRetrieveSecurity;

$sdk = MeldAPI::builder()
    ->build();

try {
    $request = new ProjectRetrieveRequest();
    $request->xPmOrg = 9766;
    $request->id = 'c4f3789f-d871-4f99-9d2e-fd121aa6f1e6';

    $requestSecurity = new ProjectRetrieveSecurity();
    $requestSecurity->pmoAuth2Authentication = '';

    $response = $sdk->project->projectRetrieve($request, $requestSecurity);

    if ($response->pmAPIProjectDetail !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```
