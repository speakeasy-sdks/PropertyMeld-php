# property

### Available Operations

* [propertyCreate](#propertycreate)
* [propertyDestroy](#propertydestroy)
* [propertyList](#propertylist)
* [propertyPartialUpdate](#propertypartialupdate)
* [propertyRetrieve](#propertyretrieve)
* [propertyUpdate](#propertyupdate)

## propertyCreate

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \PropertyMeld\MeldAPI\MeldAPI;
use \PropertyMeld\MeldAPI\Models\Shared\PropertyInput;
use \PropertyMeld\MeldAPI\Models\Operations\PropertyCreateSecurity;

$sdk = MeldAPI::builder()
    ->build();

try {
    $request = new PropertyInput();
    $request->city = 'Destineecester';
    $request->country = 'Svalbard & Jan Mayen Islands';
    $request->countyProvince = 'soluta';
    $request->line1 = 'accusantium';
    $request->line2 = 'aliquam';
    $request->line3 = 'sapiente';
    $request->maintenanceNotes = 'dicta';
    $request->otherAddressDetails = 'ullam';
    $request->owners = [
        356707,
        391774,
    ];
    $request->postcode = '51845';
    $request->propertyGroups = [
        680270,
        99615,
        609178,
        945302,
    ];
    $request->propertyName = 'quasi';
    $request->units = [
        92027,
        454162,
        55965,
        326701,
    ];

    $requestSecurity = new PropertyCreateSecurity();
    $requestSecurity->pmoAuth2Authentication = '';

    $response = $sdk->property->propertyCreate($request, $requestSecurity);

    if ($response->property !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## propertyDestroy

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \PropertyMeld\MeldAPI\MeldAPI;
use \PropertyMeld\MeldAPI\Models\Operations\PropertyDestroyRequest;
use \PropertyMeld\MeldAPI\Models\Operations\PropertyDestroySecurity;

$sdk = MeldAPI::builder()
    ->build();

try {
    $request = new PropertyDestroyRequest();
    $request->id = '1339d080-86a1-4840-b94c-26071f93f5f0';

    $requestSecurity = new PropertyDestroySecurity();
    $requestSecurity->pmoAuth2Authentication = '';

    $response = $sdk->property->propertyDestroy($request, $requestSecurity);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## propertyList

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \PropertyMeld\MeldAPI\MeldAPI;
use \PropertyMeld\MeldAPI\Models\Operations\PropertyListRequest;
use \PropertyMeld\MeldAPI\Models\Operations\PropertyListSecurity;

$sdk = MeldAPI::builder()
    ->build();

try {
    $request = new PropertyListRequest();
    $request->limit = 409054;
    $request->offset = 310067;
    $request->ordering = 'consequuntur';

    $requestSecurity = new PropertyListSecurity();
    $requestSecurity->pmoAuth2Authentication = '';

    $response = $sdk->property->propertyList($request, $requestSecurity);

    if ($response->paginatedPropertyList !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## propertyPartialUpdate

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \PropertyMeld\MeldAPI\MeldAPI;
use \PropertyMeld\MeldAPI\Models\Operations\PropertyPartialUpdateRequest;
use \PropertyMeld\MeldAPI\Models\Shared\PatchedPropertyInput;
use \PropertyMeld\MeldAPI\Models\Operations\PropertyPartialUpdateSecurity;

$sdk = MeldAPI::builder()
    ->build();

try {
    $request = new PropertyPartialUpdateRequest();
    $request->patchedPropertyInput = new PatchedPropertyInput();
    $request->patchedPropertyInput->city = 'Oklahoma City';
    $request->patchedPropertyInput->country = 'Singapore';
    $request->patchedPropertyInput->countyProvince = 'dignissimos';
    $request->patchedPropertyInput->line1 = 'officia';
    $request->patchedPropertyInput->line2 = 'asperiores';
    $request->patchedPropertyInput->line3 = 'nemo';
    $request->patchedPropertyInput->maintenanceNotes = 'quae';
    $request->patchedPropertyInput->otherAddressDetails = 'quaerat';
    $request->patchedPropertyInput->owners = [
        801836,
        288398,
        70447,
        241418,
    ];
    $request->patchedPropertyInput->postcode = '63266-9584';
    $request->patchedPropertyInput->propertyGroups = [
        554688,
        427834,
    ];
    $request->patchedPropertyInput->propertyName = 'labore';
    $request->patchedPropertyInput->units = [
        706575,
        738227,
        414857,
        447144,
    ];
    $request->id = '5fd5e60b-375e-4d4f-afbe-e41f33317fe3';

    $requestSecurity = new PropertyPartialUpdateSecurity();
    $requestSecurity->pmoAuth2Authentication = '';

    $response = $sdk->property->propertyPartialUpdate($request, $requestSecurity);

    if ($response->property !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## propertyRetrieve

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \PropertyMeld\MeldAPI\MeldAPI;
use \PropertyMeld\MeldAPI\Models\Operations\PropertyRetrieveRequest;
use \PropertyMeld\MeldAPI\Models\Operations\PropertyRetrieveSecurity;

$sdk = MeldAPI::builder()
    ->build();

try {
    $request = new PropertyRetrieveRequest();
    $request->id = '5b60eb1e-a426-4555-ba3c-28744ed53b88';

    $requestSecurity = new PropertyRetrieveSecurity();
    $requestSecurity->pmoAuth2Authentication = '';

    $response = $sdk->property->propertyRetrieve($request, $requestSecurity);

    if ($response->property !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## propertyUpdate

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \PropertyMeld\MeldAPI\MeldAPI;
use \PropertyMeld\MeldAPI\Models\Operations\PropertyUpdateRequest;
use \PropertyMeld\MeldAPI\Models\Shared\PropertyInput;
use \PropertyMeld\MeldAPI\Models\Operations\PropertyUpdateSecurity;

$sdk = MeldAPI::builder()
    ->build();

try {
    $request = new PropertyUpdateRequest();
    $request->propertyInput = new PropertyInput();
    $request->propertyInput->city = 'Compton';
    $request->propertyInput->country = 'New Caledonia';
    $request->propertyInput->countyProvince = 'corrupti';
    $request->propertyInput->line1 = 'pariatur';
    $request->propertyInput->line2 = 'totam';
    $request->propertyInput->line3 = 'hic';
    $request->propertyInput->maintenanceNotes = 'exercitationem';
    $request->propertyInput->otherAddressDetails = 'nobis';
    $request->propertyInput->owners = [
        699575,
    ];
    $request->propertyInput->postcode = '91974';
    $request->propertyInput->propertyGroups = [
        70869,
        611749,
        292794,
    ];
    $request->propertyInput->propertyName = 'laborum';
    $request->propertyInput->units = [
        447516,
    ];
    $request->id = '6b26916f-e1f0-48f4-a94e-3698f447f603';

    $requestSecurity = new PropertyUpdateSecurity();
    $requestSecurity->pmoAuth2Authentication = '';

    $response = $sdk->property->propertyUpdate($request, $requestSecurity);

    if ($response->property !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```
