# propertyGroup

### Available Operations

* [propertyGroupList](#propertygrouplist)
* [propertyGroupRetrieve](#propertygroupretrieve)

## propertyGroupList

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \PropertyMeld\MeldAPI\MeldAPI;
use \PropertyMeld\MeldAPI\Models\Operations\PropertyGroupListRequest;
use \PropertyMeld\MeldAPI\Models\Operations\PropertyGroupListSecurity;

$sdk = MeldAPI::builder()
    ->build();

try {
    $request = new PropertyGroupListRequest();
    $request->xPmOrg = 888044;
    $request->limit = 505866;
    $request->offset = 708609;
    $request->ordering = 'quaerat';

    $requestSecurity = new PropertyGroupListSecurity();
    $requestSecurity->pmoAuth2Authentication = '';

    $response = $sdk->propertyGroup->propertyGroupList($request, $requestSecurity);

    if ($response->paginatedPropertyGroupSerializerListList !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## propertyGroupRetrieve

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \PropertyMeld\MeldAPI\MeldAPI;
use \PropertyMeld\MeldAPI\Models\Operations\PropertyGroupRetrieveRequest;
use \PropertyMeld\MeldAPI\Models\Operations\PropertyGroupRetrieveSecurity;

$sdk = MeldAPI::builder()
    ->build();

try {
    $request = new PropertyGroupRetrieveRequest();
    $request->xPmOrg = 277773;
    $request->id = '5e80ca55-efd2-40e4-97e1-858b6a89fbe3';

    $requestSecurity = new PropertyGroupRetrieveSecurity();
    $requestSecurity->pmoAuth2Authentication = '';

    $response = $sdk->propertyGroup->propertyGroupRetrieve($request, $requestSecurity);

    if ($response->propertyGroupSerializerDetail !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```
