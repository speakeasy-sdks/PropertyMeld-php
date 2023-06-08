# unit

### Available Operations

* [unitCreate](#unitcreate)
* [unitDestroy](#unitdestroy)
* [unitList](#unitlist)
* [unitPartialUpdate](#unitpartialupdate)
* [unitRetrieve](#unitretrieve)
* [unitUpdate](#unitupdate)

## unitCreate

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \PropertyMeld\MeldAPI\MeldAPI;
use \PropertyMeld\MeldAPI\Models\Shared\UnitInput;
use \PropertyMeld\MeldAPI\Models\Shared\Address;
use \PropertyMeld\MeldAPI\Models\Operations\UnitCreateSecurity;

$sdk = MeldAPI::builder()
    ->build();

try {
    $request = new UnitInput();
    $request->approvalCurrencyLimit = 'quae';
    $request->currentResidents = [
        208253,
        348357,
    ];
    $request->maintenanceNotes = 'itaque';
    $request->propertyId = 88248;
    $request->unit = 'ipsum';
    $request->unitAddress = new Address();
    $request->unitAddress->city = 'Stiedemanncester';
    $request->unitAddress->country = 'Sierra Leone';
    $request->unitAddress->countyProvince = 'quia';
    $request->unitAddress->line1 = 'quia';
    $request->unitAddress->line2 = 'nostrum';
    $request->unitAddress->line3 = 'omnis';
    $request->unitAddress->postcode = '16786-5804';

    $requestSecurity = new UnitCreateSecurity();
    $requestSecurity->pmoAuth2Authentication = '';

    $response = $sdk->unit->unitCreate($request, $requestSecurity);

    if ($response->unit !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## unitDestroy

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \PropertyMeld\MeldAPI\MeldAPI;
use \PropertyMeld\MeldAPI\Models\Operations\UnitDestroyRequest;
use \PropertyMeld\MeldAPI\Models\Operations\UnitDestroySecurity;

$sdk = MeldAPI::builder()
    ->build();

try {
    $request = new UnitDestroyRequest();
    $request->id = '0e1084cb-0672-4d1a-9879-eeb9665b85ef';

    $requestSecurity = new UnitDestroySecurity();
    $requestSecurity->pmoAuth2Authentication = '';

    $response = $sdk->unit->unitDestroy($request, $requestSecurity);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## unitList

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \PropertyMeld\MeldAPI\MeldAPI;
use \PropertyMeld\MeldAPI\Models\Operations\UnitListRequest;
use \PropertyMeld\MeldAPI\Models\Operations\UnitListSecurity;

$sdk = MeldAPI::builder()
    ->build();

try {
    $request = new UnitListRequest();
    $request->limit = 737279;
    $request->offset = 872303;
    $request->ordering = 'alias';

    $requestSecurity = new UnitListSecurity();
    $requestSecurity->pmoAuth2Authentication = '';

    $response = $sdk->unit->unitList($request, $requestSecurity);

    if ($response->paginatedUnitList !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## unitPartialUpdate

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \PropertyMeld\MeldAPI\MeldAPI;
use \PropertyMeld\MeldAPI\Models\Operations\UnitPartialUpdateRequest;
use \PropertyMeld\MeldAPI\Models\Shared\PatchedUnitInput;
use \PropertyMeld\MeldAPI\Models\Shared\Address;
use \PropertyMeld\MeldAPI\Models\Operations\UnitPartialUpdateSecurity;

$sdk = MeldAPI::builder()
    ->build();

try {
    $request = new UnitPartialUpdateRequest();
    $request->patchedUnitInput = new PatchedUnitInput();
    $request->patchedUnitInput->approvalCurrencyLimit = 'quia';
    $request->patchedUnitInput->currentResidents = [
        684126,
        919508,
        34070,
    ];
    $request->patchedUnitInput->maintenanceNotes = 'expedita';
    $request->patchedUnitInput->propertyId = 885208;
    $request->patchedUnitInput->unit = 'eos';
    $request->patchedUnitInput->unitAddress = new Address();
    $request->patchedUnitInput->unitAddress->city = 'Lawton';
    $request->patchedUnitInput->unitAddress->country = 'Lithuania';
    $request->patchedUnitInput->unitAddress->countyProvince = 'odit';
    $request->patchedUnitInput->unitAddress->line1 = 'explicabo';
    $request->patchedUnitInput->unitAddress->line2 = 'corporis';
    $request->patchedUnitInput->unitAddress->line3 = 'error';
    $request->patchedUnitInput->unitAddress->postcode = '29626-3164';
    $request->id = 'f92443da-7ce5-42b8-95c5-37c6454efb0b';

    $requestSecurity = new UnitPartialUpdateSecurity();
    $requestSecurity->pmoAuth2Authentication = '';

    $response = $sdk->unit->unitPartialUpdate($request, $requestSecurity);

    if ($response->unit !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## unitRetrieve

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \PropertyMeld\MeldAPI\MeldAPI;
use \PropertyMeld\MeldAPI\Models\Operations\UnitRetrieveRequest;
use \PropertyMeld\MeldAPI\Models\Operations\UnitRetrieveSecurity;

$sdk = MeldAPI::builder()
    ->build();

try {
    $request = new UnitRetrieveRequest();
    $request->id = '34896c3c-a5ac-4fbe-afd5-707577929177';

    $requestSecurity = new UnitRetrieveSecurity();
    $requestSecurity->pmoAuth2Authentication = '';

    $response = $sdk->unit->unitRetrieve($request, $requestSecurity);

    if ($response->unit !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## unitUpdate

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \PropertyMeld\MeldAPI\MeldAPI;
use \PropertyMeld\MeldAPI\Models\Operations\UnitUpdateRequest;
use \PropertyMeld\MeldAPI\Models\Shared\UnitInput;
use \PropertyMeld\MeldAPI\Models\Shared\Address;
use \PropertyMeld\MeldAPI\Models\Operations\UnitUpdateSecurity;

$sdk = MeldAPI::builder()
    ->build();

try {
    $request = new UnitUpdateRequest();
    $request->unitInput = new UnitInput();
    $request->unitInput->approvalCurrencyLimit = 'pariatur';
    $request->unitInput->currentResidents = [
        627735,
        763165,
        401428,
        311486,
    ];
    $request->unitInput->maintenanceNotes = 'commodi';
    $request->unitInput->propertyId = 888616;
    $request->unitInput->unit = 'placeat';
    $request->unitInput->unitAddress = new Address();
    $request->unitInput->unitAddress->city = 'Heidenreichport';
    $request->unitInput->unitAddress->country = 'Cote d'Ivoire';
    $request->unitInput->unitAddress->countyProvince = 'modi';
    $request->unitInput->unitAddress->line1 = 'ipsa';
    $request->unitInput->unitAddress->line2 = 'sint';
    $request->unitInput->unitAddress->line3 = 'vero';
    $request->unitInput->unitAddress->postcode = '97193';
    $request->id = 'a2b12eb0-7f11-46db-9954-5fc95fa88970';

    $requestSecurity = new UnitUpdateSecurity();
    $requestSecurity->pmoAuth2Authentication = '';

    $response = $sdk->unit->unitUpdate($request, $requestSecurity);

    if ($response->unit !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```
