# vendor

### Available Operations

* [vendorDestroy](#vendordestroy)
* [vendorList](#vendorlist)
* [vendorRetrieve](#vendorretrieve)

## vendorDestroy

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \PropertyMeld\MeldAPI\MeldAPI;
use \PropertyMeld\MeldAPI\Models\Operations\VendorDestroyRequest;
use \PropertyMeld\MeldAPI\Models\Operations\VendorDestroySecurity;

$sdk = MeldAPI::builder()
    ->build();

try {
    $request = new VendorDestroyRequest();
    $request->id = 'e189dbb3-0fcb-433e-a055-b197cd44e2f5';

    $requestSecurity = new VendorDestroySecurity();
    $requestSecurity->pmoAuth2Authentication = '';

    $response = $sdk->vendor->vendorDestroy($request, $requestSecurity);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## vendorList

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \PropertyMeld\MeldAPI\MeldAPI;
use \PropertyMeld\MeldAPI\Models\Operations\VendorListRequest;
use \PropertyMeld\MeldAPI\Models\Operations\VendorListSecurity;

$sdk = MeldAPI::builder()
    ->build();

try {
    $request = new VendorListRequest();
    $request->xPmOrg = 164532;
    $request->limit = 813880;
    $request->offset = 512905;
    $request->ordering = 'odit';

    $requestSecurity = new VendorListSecurity();
    $requestSecurity->pmoAuth2Authentication = '';

    $response = $sdk->vendor->vendorList($request, $requestSecurity);

    if ($response->paginatedVendorList !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## vendorRetrieve

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \PropertyMeld\MeldAPI\MeldAPI;
use \PropertyMeld\MeldAPI\Models\Operations\VendorRetrieveRequest;
use \PropertyMeld\MeldAPI\Models\Operations\VendorRetrieveSecurity;

$sdk = MeldAPI::builder()
    ->build();

try {
    $request = new VendorRetrieveRequest();
    $request->id = 'd3513bb6-f48b-4656-bcdb-35ff2e4b2753';

    $requestSecurity = new VendorRetrieveSecurity();
    $requestSecurity->pmoAuth2Authentication = '';

    $response = $sdk->vendor->vendorRetrieve($request, $requestSecurity);

    if ($response->vendor !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```
