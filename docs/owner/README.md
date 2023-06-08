# owner

### Available Operations

* [ownerCreate](#ownercreate)
* [ownerDestroy](#ownerdestroy)
* [ownerList](#ownerlist)
* [ownerPartialUpdate](#ownerpartialupdate)
* [ownerRetrieve](#ownerretrieve)
* [ownerUpdate](#ownerupdate)

## ownerCreate

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \PropertyMeld\MeldAPI\MeldAPI;
use \PropertyMeld\MeldAPI\Models\Shared\OwnerInput;
use \PropertyMeld\MeldAPI\Models\Shared\Address;
use \PropertyMeld\MeldAPI\Models\Shared\Contact;
use \PropertyMeld\MeldAPI\Models\Shared\HubAccessLevelEnum;
use \PropertyMeld\MeldAPI\Models\Operations\OwnerCreateSecurity;

$sdk = MeldAPI::builder()
    ->build();

try {
    $request = new OwnerInput();
    $request->address = new Address();
    $request->address->city = 'State College';
    $request->address->country = 'Saint Helena';
    $request->address->countyProvince = 'dicta';
    $request->address->line1 = 'laborum';
    $request->address->line2 = 'totam';
    $request->address->line3 = 'incidunt';
    $request->address->postcode = '17734';
    $request->contact = new Contact();
    $request->contact->businessPhone = 'molestias';
    $request->contact->businessPhoneExt = 'temporibus';
    $request->contact->cellPhone = 'qui';
    $request->contact->cellPhoneExt = 'neque';
    $request->contact->fax = 'fugit';
    $request->contact->homePhone = 'magni';
    $request->contact->homePhoneExt = 'odio';
    $request->contact->primaryEmail = 'Fiona.Reichert76@gmail.com';
    $request->contact->secondaryEmail = 'Nella.Bosco8@hotmail.com';
    $request->contact->tertiaryEmail = 'Katrine.Reynolds@hotmail.com';
    $request->email = 'Corene24@hotmail.com';
    $request->firstName = 'Marianne';
    $request->hubAccessLevel = HubAccessLevelEnum::DIRECT_ONLY;
    $request->invitedToHub = false;
    $request->lastName = 'Berge';
    $request->properties = [
        555649,
    ];

    $requestSecurity = new OwnerCreateSecurity();
    $requestSecurity->pmoAuth2Authentication = '';

    $response = $sdk->owner->ownerCreate($request, $requestSecurity);

    if ($response->owner !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## ownerDestroy

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \PropertyMeld\MeldAPI\MeldAPI;
use \PropertyMeld\MeldAPI\Models\Operations\OwnerDestroyRequest;
use \PropertyMeld\MeldAPI\Models\Operations\OwnerDestroySecurity;

$sdk = MeldAPI::builder()
    ->build();

try {
    $request = new OwnerDestroyRequest();
    $request->id = 'e0adcf4b-9218-479f-8e95-3f73ef7fbc7a';

    $requestSecurity = new OwnerDestroySecurity();
    $requestSecurity->pmoAuth2Authentication = '';

    $response = $sdk->owner->ownerDestroy($request, $requestSecurity);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## ownerList

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \PropertyMeld\MeldAPI\MeldAPI;
use \PropertyMeld\MeldAPI\Models\Operations\OwnerListRequest;
use \PropertyMeld\MeldAPI\Models\Operations\OwnerListSecurity;

$sdk = MeldAPI::builder()
    ->build();

try {
    $request = new OwnerListRequest();
    $request->limit = 708548;
    $request->offset = 874288;
    $request->ordering = 'ducimus';

    $requestSecurity = new OwnerListSecurity();
    $requestSecurity->pmoAuth2Authentication = '';

    $response = $sdk->owner->ownerList($request, $requestSecurity);

    if ($response->paginatedOwnerList !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## ownerPartialUpdate

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \PropertyMeld\MeldAPI\MeldAPI;
use \PropertyMeld\MeldAPI\Models\Operations\OwnerPartialUpdateRequest;
use \PropertyMeld\MeldAPI\Models\Shared\PatchedOwnerInput;
use \PropertyMeld\MeldAPI\Models\Shared\Address;
use \PropertyMeld\MeldAPI\Models\Shared\Contact;
use \PropertyMeld\MeldAPI\Models\Shared\HubAccessLevelEnum;
use \PropertyMeld\MeldAPI\Models\Operations\OwnerPartialUpdateSecurity;

$sdk = MeldAPI::builder()
    ->build();

try {
    $request = new OwnerPartialUpdateRequest();
    $request->patchedOwnerInput = new PatchedOwnerInput();
    $request->patchedOwnerInput->address = new Address();
    $request->patchedOwnerInput->address->city = 'Port Rosina';
    $request->patchedOwnerInput->address->country = 'Comoros';
    $request->patchedOwnerInput->address->countyProvince = 'natus';
    $request->patchedOwnerInput->address->line1 = 'impedit';
    $request->patchedOwnerInput->address->line2 = 'aut';
    $request->patchedOwnerInput->address->line3 = 'voluptatibus';
    $request->patchedOwnerInput->address->postcode = '81799';
    $request->patchedOwnerInput->contact = new Contact();
    $request->patchedOwnerInput->contact->businessPhone = 'iusto';
    $request->patchedOwnerInput->contact->businessPhoneExt = 'eligendi';
    $request->patchedOwnerInput->contact->cellPhone = 'ducimus';
    $request->patchedOwnerInput->contact->cellPhoneExt = 'alias';
    $request->patchedOwnerInput->contact->fax = 'officia';
    $request->patchedOwnerInput->contact->homePhone = 'tempora';
    $request->patchedOwnerInput->contact->homePhoneExt = 'ipsam';
    $request->patchedOwnerInput->contact->primaryEmail = 'Brielle.Keebler18@yahoo.com';
    $request->patchedOwnerInput->contact->secondaryEmail = 'Johnpaul98@yahoo.com';
    $request->patchedOwnerInput->contact->tertiaryEmail = 'Gustave_Stoltenberg@gmail.com';
    $request->patchedOwnerInput->email = 'Victor.Schamberger77@yahoo.com';
    $request->patchedOwnerInput->firstName = 'Flossie';
    $request->patchedOwnerInput->hubAccessLevel = HubAccessLevelEnum::ALL_NOTIFICATIONS;
    $request->patchedOwnerInput->invitedToHub = false;
    $request->patchedOwnerInput->lastName = 'Jacobi';
    $request->patchedOwnerInput->properties = [
        301831,
    ];
    $request->id = '6c3e250f-b008-4c42-a141-aac366c8dd6b';

    $requestSecurity = new OwnerPartialUpdateSecurity();
    $requestSecurity->pmoAuth2Authentication = '';

    $response = $sdk->owner->ownerPartialUpdate($request, $requestSecurity);

    if ($response->owner !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## ownerRetrieve

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \PropertyMeld\MeldAPI\MeldAPI;
use \PropertyMeld\MeldAPI\Models\Operations\OwnerRetrieveRequest;
use \PropertyMeld\MeldAPI\Models\Operations\OwnerRetrieveSecurity;

$sdk = MeldAPI::builder()
    ->build();

try {
    $request = new OwnerRetrieveRequest();
    $request->id = '14429074-7477-48a7-bd46-6d28c10ab3cd';

    $requestSecurity = new OwnerRetrieveSecurity();
    $requestSecurity->pmoAuth2Authentication = '';

    $response = $sdk->owner->ownerRetrieve($request, $requestSecurity);

    if ($response->owner !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

## ownerUpdate

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \PropertyMeld\MeldAPI\MeldAPI;
use \PropertyMeld\MeldAPI\Models\Operations\OwnerUpdateRequest;
use \PropertyMeld\MeldAPI\Models\Shared\OwnerInput;
use \PropertyMeld\MeldAPI\Models\Shared\Address;
use \PropertyMeld\MeldAPI\Models\Shared\Contact;
use \PropertyMeld\MeldAPI\Models\Shared\HubAccessLevelEnum;
use \PropertyMeld\MeldAPI\Models\Operations\OwnerUpdateSecurity;

$sdk = MeldAPI::builder()
    ->build();

try {
    $request = new OwnerUpdateRequest();
    $request->ownerInput = new OwnerInput();
    $request->ownerInput->address = new Address();
    $request->ownerInput->address->city = 'Parkerburgh';
    $request->ownerInput->address->country = 'China';
    $request->ownerInput->address->countyProvince = 'voluptas';
    $request->ownerInput->address->line1 = 'ab';
    $request->ownerInput->address->line2 = 'cupiditate';
    $request->ownerInput->address->line3 = 'consequatur';
    $request->ownerInput->address->postcode = '83117';
    $request->ownerInput->contact = new Contact();
    $request->ownerInput->contact->businessPhone = 'esse';
    $request->ownerInput->contact->businessPhoneExt = 'recusandae';
    $request->ownerInput->contact->cellPhone = 'aperiam';
    $request->ownerInput->contact->cellPhoneExt = 'distinctio';
    $request->ownerInput->contact->fax = 'quod';
    $request->ownerInput->contact->homePhone = 'dignissimos';
    $request->ownerInput->contact->homePhoneExt = 'inventore';
    $request->ownerInput->contact->primaryEmail = 'Josiah48@yahoo.com';
    $request->ownerInput->contact->secondaryEmail = 'Harvey64@yahoo.com';
    $request->ownerInput->contact->tertiaryEmail = 'Alfonzo_Sawayn@yahoo.com';
    $request->ownerInput->email = 'Carol68@yahoo.com';
    $request->ownerInput->firstName = 'Lysanne';
    $request->ownerInput->hubAccessLevel = HubAccessLevelEnum::ALL_NOTIFICATIONS;
    $request->ownerInput->invitedToHub = false;
    $request->ownerInput->lastName = 'Lindgren';
    $request->ownerInput->properties = [
        325685,
    ];
    $request->id = '62f222e9-817e-4e17-8be6-1e6b7b95bc0a';

    $requestSecurity = new OwnerUpdateSecurity();
    $requestSecurity->pmoAuth2Authentication = '';

    $response = $sdk->owner->ownerUpdate($request, $requestSecurity);

    if ($response->owner !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```
