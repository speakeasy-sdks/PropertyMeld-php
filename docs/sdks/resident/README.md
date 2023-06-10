# resident

### Available Operations

* [residentCreateForm](#residentcreateform)
* [residentCreateJson](#residentcreatejson)
* [residentCreateMultipart](#residentcreatemultipart)
* [residentDestroy](#residentdestroy)
* [residentList](#residentlist)
* [residentPartialUpdateForm](#residentpartialupdateform)
* [residentPartialUpdateJson](#residentpartialupdatejson)
* [residentPartialUpdateMultipart](#residentpartialupdatemultipart)
* [residentRetrieve](#residentretrieve)
* [residentUpdateForm](#residentupdateform)
* [residentUpdateJson](#residentupdatejson)
* [residentUpdateMultipart](#residentupdatemultipart)

## residentCreateForm

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \PropertyMeld\MeldAPI\MeldAPI;
use \PropertyMeld\MeldAPI\Models\Shared\ResidentInput1;
use \PropertyMeld\MeldAPI\Models\Shared\Contact;
use \PropertyMeld\MeldAPI\Models\Shared\NotificationSettingsInput;
use \PropertyMeld\MeldAPI\Models\Shared\IncomingMeldFrequencyEnum;
use \PropertyMeld\MeldAPI\Models\Shared\SuccessfulMeldFrequencyEnum;
use \PropertyMeld\MeldAPI\Models\Shared\TimezoneEnum;
use \PropertyMeld\MeldAPI\Models\Operations\ResidentCreateFormSecurity;

$sdk = MeldAPI::builder()
    ->build();

try {
    $request = new ResidentInput1();
    $request->address = 'dolorum';
    $request->contact = new Contact();
    $request->contact->businessPhone = 'nostrum';
    $request->contact->businessPhoneExt = 'officia';
    $request->contact->cellPhone = 'dolorum';
    $request->contact->cellPhoneExt = 'corrupti';
    $request->contact->fax = 'accusamus';
    $request->contact->homePhone = 'tempora';
    $request->contact->homePhoneExt = 'atque';
    $request->contact->primaryEmail = 'Easter63@gmail.com';
    $request->contact->secondaryEmail = 'Elinor.Adams@hotmail.com';
    $request->contact->tertiaryEmail = 'Justine.Lynch8@gmail.com';
    $request->firstName = 'Jo';
    $request->invite = false;
    $request->lastName = 'Jaskolski';
    $request->middleName = 'sed';
    $request->notes = 'sit';
    $request->notificationSettings = new NotificationSettingsInput();
    $request->notificationSettings->incomingMeldFrequency = IncomingMeldFrequencyEnum::Daily;
    $request->notificationSettings->smsNotifications = false;
    $request->notificationSettings->successfulMeldFrequency = SuccessfulMeldFrequencyEnum::Daily;
    $request->notificationSettings->timezone = TimezoneEnum::PacificGambier;
    $request->units = [
        8511,
        279068,
        968865,
    ];

    $requestSecurity = new ResidentCreateFormSecurity();
    $requestSecurity->pmoAuth2Authentication = '';

    $response = $sdk->resident->residentCreateForm($request, $requestSecurity);

    if ($response->resident !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                   | Type                                                                                                                        | Required                                                                                                                    | Description                                                                                                                 |
| --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                  | [\PropertyMeld\MeldAPI\Models\Shared\ResidentInput1](../../models/shared/ResidentInput1.md)                                 | :heavy_check_mark:                                                                                                          | The request object to use for the request.                                                                                  |
| `security`                                                                                                                  | [\PropertyMeld\MeldAPI\Models\Operations\ResidentCreateFormSecurity](../../models/operations/ResidentCreateFormSecurity.md) | :heavy_check_mark:                                                                                                          | The security requirements to use for the request.                                                                           |


### Response

**[?\PropertyMeld\MeldAPI\Models\Operations\ResidentCreateFormResponse](../../models/operations/ResidentCreateFormResponse.md)**


## residentCreateJson

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \PropertyMeld\MeldAPI\MeldAPI;
use \PropertyMeld\MeldAPI\Models\Shared\ResidentInput;
use \PropertyMeld\MeldAPI\Models\Shared\ResidentAddress;
use \PropertyMeld\MeldAPI\Models\Shared\Contact;
use \PropertyMeld\MeldAPI\Models\Shared\NotificationSettingsInput;
use \PropertyMeld\MeldAPI\Models\Shared\IncomingMeldFrequencyEnum;
use \PropertyMeld\MeldAPI\Models\Shared\SuccessfulMeldFrequencyEnum;
use \PropertyMeld\MeldAPI\Models\Shared\TimezoneEnum;
use \PropertyMeld\MeldAPI\Models\Operations\ResidentCreateJsonSecurity;

$sdk = MeldAPI::builder()
    ->build();

try {
    $request = new ResidentInput();
    $request->address = new ResidentAddress();
    $request->address->city = 'Lake Bettie';
    $request->address->country = 'Bhutan';
    $request->address->countyProvince = 'occaecati';
    $request->address->line1 = 'labore';
    $request->address->line2 = 'quidem';
    $request->address->line3 = 'atque';
    $request->address->postcode = '79302-6469';
    $request->contact = new Contact();
    $request->contact->businessPhone = 'provident';
    $request->contact->businessPhoneExt = 'repellendus';
    $request->contact->cellPhone = 'delectus';
    $request->contact->cellPhoneExt = 'voluptates';
    $request->contact->fax = 'perferendis';
    $request->contact->homePhone = 'est';
    $request->contact->homePhoneExt = 'quidem';
    $request->contact->primaryEmail = 'Raquel_Pfannerstill@yahoo.com';
    $request->contact->secondaryEmail = 'Alessia.Schiller54@yahoo.com';
    $request->contact->tertiaryEmail = 'Yvette_Leannon@yahoo.com';
    $request->firstName = 'Rae';
    $request->invite = false;
    $request->lastName = 'Borer';
    $request->middleName = 'esse';
    $request->notes = 'amet';
    $request->notificationSettings = new NotificationSettingsInput();
    $request->notificationSettings->incomingMeldFrequency = IncomingMeldFrequencyEnum::Never;
    $request->notificationSettings->smsNotifications = false;
    $request->notificationSettings->successfulMeldFrequency = SuccessfulMeldFrequencyEnum::Daily;
    $request->notificationSettings->timezone = TimezoneEnum::AsiaThimphu;
    $request->units = [
        887265,
        886961,
        880107,
    ];

    $requestSecurity = new ResidentCreateJsonSecurity();
    $requestSecurity->pmoAuth2Authentication = '';

    $response = $sdk->resident->residentCreateJson($request, $requestSecurity);

    if ($response->resident !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                   | Type                                                                                                                        | Required                                                                                                                    | Description                                                                                                                 |
| --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                  | [\PropertyMeld\MeldAPI\Models\Shared\ResidentInput](../../models/shared/ResidentInput.md)                                   | :heavy_check_mark:                                                                                                          | The request object to use for the request.                                                                                  |
| `security`                                                                                                                  | [\PropertyMeld\MeldAPI\Models\Operations\ResidentCreateJsonSecurity](../../models/operations/ResidentCreateJsonSecurity.md) | :heavy_check_mark:                                                                                                          | The security requirements to use for the request.                                                                           |


### Response

**[?\PropertyMeld\MeldAPI\Models\Operations\ResidentCreateJsonResponse](../../models/operations/ResidentCreateJsonResponse.md)**


## residentCreateMultipart

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \PropertyMeld\MeldAPI\MeldAPI;
use \PropertyMeld\MeldAPI\Models\Shared\ResidentInput1;
use \PropertyMeld\MeldAPI\Models\Shared\Contact;
use \PropertyMeld\MeldAPI\Models\Shared\NotificationSettingsInput;
use \PropertyMeld\MeldAPI\Models\Shared\IncomingMeldFrequencyEnum;
use \PropertyMeld\MeldAPI\Models\Shared\SuccessfulMeldFrequencyEnum;
use \PropertyMeld\MeldAPI\Models\Shared\TimezoneEnum;
use \PropertyMeld\MeldAPI\Models\Operations\ResidentCreateMultipartSecurity;

$sdk = MeldAPI::builder()
    ->build();

try {
    $request = new ResidentInput1();
    $request->address = 'natus';
    $request->contact = new Contact();
    $request->contact->businessPhone = 'minima';
    $request->contact->businessPhoneExt = 'aspernatur';
    $request->contact->cellPhone = 'ex';
    $request->contact->cellPhoneExt = 'maiores';
    $request->contact->fax = 'corrupti';
    $request->contact->homePhone = 'at';
    $request->contact->homePhoneExt = 'error';
    $request->contact->primaryEmail = 'Genevieve_Walker@yahoo.com';
    $request->contact->secondaryEmail = 'Theresia.Parisian96@gmail.com';
    $request->contact->tertiaryEmail = 'Tevin10@gmail.com';
    $request->firstName = 'Chandler';
    $request->invite = false;
    $request->lastName = 'Halvorson';
    $request->middleName = 'laboriosam';
    $request->notes = 'velit';
    $request->notificationSettings = new NotificationSettingsInput();
    $request->notificationSettings->incomingMeldFrequency = IncomingMeldFrequencyEnum::Never;
    $request->notificationSettings->smsNotifications = false;
    $request->notificationSettings->successfulMeldFrequency = SuccessfulMeldFrequencyEnum::Daily;
    $request->notificationSettings->timezone = TimezoneEnum::AmericaPanama;
    $request->units = [
        160467,
        580107,
        886305,
        597937,
    ];

    $requestSecurity = new ResidentCreateMultipartSecurity();
    $requestSecurity->pmoAuth2Authentication = '';

    $response = $sdk->resident->residentCreateMultipart($request, $requestSecurity);

    if ($response->resident !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                             | Type                                                                                                                                  | Required                                                                                                                              | Description                                                                                                                           |
| ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                            | [\PropertyMeld\MeldAPI\Models\Shared\ResidentInput1](../../models/shared/ResidentInput1.md)                                           | :heavy_check_mark:                                                                                                                    | The request object to use for the request.                                                                                            |
| `security`                                                                                                                            | [\PropertyMeld\MeldAPI\Models\Operations\ResidentCreateMultipartSecurity](../../models/operations/ResidentCreateMultipartSecurity.md) | :heavy_check_mark:                                                                                                                    | The security requirements to use for the request.                                                                                     |


### Response

**[?\PropertyMeld\MeldAPI\Models\Operations\ResidentCreateMultipartResponse](../../models/operations/ResidentCreateMultipartResponse.md)**


## residentDestroy

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \PropertyMeld\MeldAPI\MeldAPI;
use \PropertyMeld\MeldAPI\Models\Operations\ResidentDestroyRequest;
use \PropertyMeld\MeldAPI\Models\Operations\ResidentDestroySecurity;

$sdk = MeldAPI::builder()
    ->build();

try {
    $request = new ResidentDestroyRequest();
    $request->id = '73e922a5-7a15-4be3-a060-807e2b6e3ab8';

    $requestSecurity = new ResidentDestroySecurity();
    $requestSecurity->pmoAuth2Authentication = '';

    $response = $sdk->resident->residentDestroy($request, $requestSecurity);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                             | Type                                                                                                                  | Required                                                                                                              | Description                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                            | [\PropertyMeld\MeldAPI\Models\Operations\ResidentDestroyRequest](../../models/operations/ResidentDestroyRequest.md)   | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |
| `security`                                                                                                            | [\PropertyMeld\MeldAPI\Models\Operations\ResidentDestroySecurity](../../models/operations/ResidentDestroySecurity.md) | :heavy_check_mark:                                                                                                    | The security requirements to use for the request.                                                                     |


### Response

**[?\PropertyMeld\MeldAPI\Models\Operations\ResidentDestroyResponse](../../models/operations/ResidentDestroyResponse.md)**


## residentList

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \PropertyMeld\MeldAPI\MeldAPI;
use \PropertyMeld\MeldAPI\Models\Operations\ResidentListRequest;
use \PropertyMeld\MeldAPI\Models\Operations\ResidentListSecurity;

$sdk = MeldAPI::builder()
    ->build();

try {
    $request = new ResidentListRequest();
    $request->limit = 523006;
    $request->offset = 304446;
    $request->ordering = 'ad';

    $requestSecurity = new ResidentListSecurity();
    $requestSecurity->pmoAuth2Authentication = '';

    $response = $sdk->resident->residentList($request, $requestSecurity);

    if ($response->paginatedResidentList !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                       | Type                                                                                                            | Required                                                                                                        | Description                                                                                                     |
| --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                      | [\PropertyMeld\MeldAPI\Models\Operations\ResidentListRequest](../../models/operations/ResidentListRequest.md)   | :heavy_check_mark:                                                                                              | The request object to use for the request.                                                                      |
| `security`                                                                                                      | [\PropertyMeld\MeldAPI\Models\Operations\ResidentListSecurity](../../models/operations/ResidentListSecurity.md) | :heavy_check_mark:                                                                                              | The security requirements to use for the request.                                                               |


### Response

**[?\PropertyMeld\MeldAPI\Models\Operations\ResidentListResponse](../../models/operations/ResidentListResponse.md)**


## residentPartialUpdateForm

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \PropertyMeld\MeldAPI\MeldAPI;
use \PropertyMeld\MeldAPI\Models\Operations\ResidentPartialUpdateFormRequest;
use \PropertyMeld\MeldAPI\Models\Shared\PatchedResidentInput1;
use \PropertyMeld\MeldAPI\Models\Shared\Contact;
use \PropertyMeld\MeldAPI\Models\Shared\NotificationSettingsInput;
use \PropertyMeld\MeldAPI\Models\Shared\IncomingMeldFrequencyEnum;
use \PropertyMeld\MeldAPI\Models\Shared\SuccessfulMeldFrequencyEnum;
use \PropertyMeld\MeldAPI\Models\Shared\TimezoneEnum;
use \PropertyMeld\MeldAPI\Models\Operations\ResidentPartialUpdateFormSecurity;

$sdk = MeldAPI::builder()
    ->build();

try {
    $request = new ResidentPartialUpdateFormRequest();
    $request->patchedResidentInput1 = new PatchedResidentInput1();
    $request->patchedResidentInput1->address = 'repellat';
    $request->patchedResidentInput1->contact = new Contact();
    $request->patchedResidentInput1->contact->businessPhone = 'alias';
    $request->patchedResidentInput1->contact->businessPhoneExt = 'corporis';
    $request->patchedResidentInput1->contact->cellPhone = 'perspiciatis';
    $request->patchedResidentInput1->contact->cellPhoneExt = 'nihil';
    $request->patchedResidentInput1->contact->fax = 'mollitia';
    $request->patchedResidentInput1->contact->homePhone = 'voluptas';
    $request->patchedResidentInput1->contact->homePhoneExt = 'alias';
    $request->patchedResidentInput1->contact->primaryEmail = 'Waldo.Daniel@hotmail.com';
    $request->patchedResidentInput1->contact->secondaryEmail = 'Marilyne92@gmail.com';
    $request->patchedResidentInput1->contact->tertiaryEmail = 'Elsa.Kreiger@yahoo.com';
    $request->patchedResidentInput1->firstName = 'Loren';
    $request->patchedResidentInput1->invite = false;
    $request->patchedResidentInput1->lastName = 'Ferry';
    $request->patchedResidentInput1->middleName = 'debitis';
    $request->patchedResidentInput1->notes = 'laudantium';
    $request->patchedResidentInput1->notificationSettings = new NotificationSettingsInput();
    $request->patchedResidentInput1->notificationSettings->incomingMeldFrequency = IncomingMeldFrequencyEnum::Daily;
    $request->patchedResidentInput1->notificationSettings->smsNotifications = false;
    $request->patchedResidentInput1->notificationSettings->successfulMeldFrequency = SuccessfulMeldFrequencyEnum::Daily;
    $request->patchedResidentInput1->notificationSettings->timezone = TimezoneEnum::PacificNiue;
    $request->patchedResidentInput1->units = [
        592081,
        337477,
    ];
    $request->id = '6f9251a5-a9da-4660-bf57-bfaad4f9efc1';

    $requestSecurity = new ResidentPartialUpdateFormSecurity();
    $requestSecurity->pmoAuth2Authentication = '';

    $response = $sdk->resident->residentPartialUpdateForm($request, $requestSecurity);

    if ($response->resident !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                 | Type                                                                                                                                      | Required                                                                                                                                  | Description                                                                                                                               |
| ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                | [\PropertyMeld\MeldAPI\Models\Operations\ResidentPartialUpdateFormRequest](../../models/operations/ResidentPartialUpdateFormRequest.md)   | :heavy_check_mark:                                                                                                                        | The request object to use for the request.                                                                                                |
| `security`                                                                                                                                | [\PropertyMeld\MeldAPI\Models\Operations\ResidentPartialUpdateFormSecurity](../../models/operations/ResidentPartialUpdateFormSecurity.md) | :heavy_check_mark:                                                                                                                        | The security requirements to use for the request.                                                                                         |


### Response

**[?\PropertyMeld\MeldAPI\Models\Operations\ResidentPartialUpdateFormResponse](../../models/operations/ResidentPartialUpdateFormResponse.md)**


## residentPartialUpdateJson

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \PropertyMeld\MeldAPI\MeldAPI;
use \PropertyMeld\MeldAPI\Models\Operations\ResidentPartialUpdateJsonRequest;
use \PropertyMeld\MeldAPI\Models\Shared\PatchedResidentInput;
use \PropertyMeld\MeldAPI\Models\Shared\PatchedResidentAddress;
use \PropertyMeld\MeldAPI\Models\Shared\Contact;
use \PropertyMeld\MeldAPI\Models\Shared\NotificationSettingsInput;
use \PropertyMeld\MeldAPI\Models\Shared\IncomingMeldFrequencyEnum;
use \PropertyMeld\MeldAPI\Models\Shared\SuccessfulMeldFrequencyEnum;
use \PropertyMeld\MeldAPI\Models\Shared\TimezoneEnum;
use \PropertyMeld\MeldAPI\Models\Operations\ResidentPartialUpdateJsonSecurity;

$sdk = MeldAPI::builder()
    ->build();

try {
    $request = new ResidentPartialUpdateJsonRequest();
    $request->patchedResidentInput = new PatchedResidentInput();
    $request->patchedResidentInput->address = new PatchedResidentAddress();
    $request->patchedResidentInput->address->city = 'Goldnerborough';
    $request->patchedResidentInput->address->country = 'Belgium';
    $request->patchedResidentInput->address->countyProvince = 'fugit';
    $request->patchedResidentInput->address->line1 = 'cumque';
    $request->patchedResidentInput->address->line2 = 'quae';
    $request->patchedResidentInput->address->line3 = 'perferendis';
    $request->patchedResidentInput->address->postcode = '14258';
    $request->patchedResidentInput->contact = new Contact();
    $request->patchedResidentInput->contact->businessPhone = 'impedit';
    $request->patchedResidentInput->contact->businessPhoneExt = 'eos';
    $request->patchedResidentInput->contact->cellPhone = 'sapiente';
    $request->patchedResidentInput->contact->cellPhoneExt = 'eum';
    $request->patchedResidentInput->contact->fax = 'dicta';
    $request->patchedResidentInput->contact->homePhone = 'minima';
    $request->patchedResidentInput->contact->homePhoneExt = 'beatae';
    $request->patchedResidentInput->contact->primaryEmail = 'Lambert_Weber84@yahoo.com';
    $request->patchedResidentInput->contact->secondaryEmail = 'Tremaine_Metz39@gmail.com';
    $request->patchedResidentInput->contact->tertiaryEmail = 'Geo76@hotmail.com';
    $request->patchedResidentInput->firstName = 'Marlene';
    $request->patchedResidentInput->invite = false;
    $request->patchedResidentInput->lastName = 'Dickens';
    $request->patchedResidentInput->middleName = 'animi';
    $request->patchedResidentInput->notes = 'necessitatibus';
    $request->patchedResidentInput->notificationSettings = new NotificationSettingsInput();
    $request->patchedResidentInput->notificationSettings->incomingMeldFrequency = IncomingMeldFrequencyEnum::Never;
    $request->patchedResidentInput->notificationSettings->smsNotifications = false;
    $request->patchedResidentInput->notificationSettings->successfulMeldFrequency = SuccessfulMeldFrequencyEnum::Immediately;
    $request->patchedResidentInput->notificationSettings->timezone = TimezoneEnum::AmericaAntigua;
    $request->patchedResidentInput->units = [
        497777,
    ];
    $request->id = '996312fd-e047-4717-b8ff-61d017476360';

    $requestSecurity = new ResidentPartialUpdateJsonSecurity();
    $requestSecurity->pmoAuth2Authentication = '';

    $response = $sdk->resident->residentPartialUpdateJson($request, $requestSecurity);

    if ($response->resident !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                 | Type                                                                                                                                      | Required                                                                                                                                  | Description                                                                                                                               |
| ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                | [\PropertyMeld\MeldAPI\Models\Operations\ResidentPartialUpdateJsonRequest](../../models/operations/ResidentPartialUpdateJsonRequest.md)   | :heavy_check_mark:                                                                                                                        | The request object to use for the request.                                                                                                |
| `security`                                                                                                                                | [\PropertyMeld\MeldAPI\Models\Operations\ResidentPartialUpdateJsonSecurity](../../models/operations/ResidentPartialUpdateJsonSecurity.md) | :heavy_check_mark:                                                                                                                        | The security requirements to use for the request.                                                                                         |


### Response

**[?\PropertyMeld\MeldAPI\Models\Operations\ResidentPartialUpdateJsonResponse](../../models/operations/ResidentPartialUpdateJsonResponse.md)**


## residentPartialUpdateMultipart

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \PropertyMeld\MeldAPI\MeldAPI;
use \PropertyMeld\MeldAPI\Models\Operations\ResidentPartialUpdateMultipartRequest;
use \PropertyMeld\MeldAPI\Models\Shared\PatchedResidentInput1;
use \PropertyMeld\MeldAPI\Models\Shared\Contact;
use \PropertyMeld\MeldAPI\Models\Shared\NotificationSettingsInput;
use \PropertyMeld\MeldAPI\Models\Shared\IncomingMeldFrequencyEnum;
use \PropertyMeld\MeldAPI\Models\Shared\SuccessfulMeldFrequencyEnum;
use \PropertyMeld\MeldAPI\Models\Shared\TimezoneEnum;
use \PropertyMeld\MeldAPI\Models\Operations\ResidentPartialUpdateMultipartSecurity;

$sdk = MeldAPI::builder()
    ->build();

try {
    $request = new ResidentPartialUpdateMultipartRequest();
    $request->patchedResidentInput1 = new PatchedResidentInput1();
    $request->patchedResidentInput1->address = 'laborum';
    $request->patchedResidentInput1->contact = new Contact();
    $request->patchedResidentInput1->contact->businessPhone = 'sunt';
    $request->patchedResidentInput1->contact->businessPhoneExt = 'nostrum';
    $request->patchedResidentInput1->contact->cellPhone = 'fugiat';
    $request->patchedResidentInput1->contact->cellPhoneExt = 'expedita';
    $request->patchedResidentInput1->contact->fax = 'aliquid';
    $request->patchedResidentInput1->contact->homePhone = 'officia';
    $request->patchedResidentInput1->contact->homePhoneExt = 'suscipit';
    $request->patchedResidentInput1->contact->primaryEmail = 'Alanis_Kemmer@yahoo.com';
    $request->patchedResidentInput1->contact->secondaryEmail = 'Anthony_Muller65@yahoo.com';
    $request->patchedResidentInput1->contact->tertiaryEmail = 'Mollie.Hane@hotmail.com';
    $request->patchedResidentInput1->firstName = 'Bernie';
    $request->patchedResidentInput1->invite = false;
    $request->patchedResidentInput1->lastName = 'Skiles';
    $request->patchedResidentInput1->middleName = 'ex';
    $request->patchedResidentInput1->notes = 'quo';
    $request->patchedResidentInput1->notificationSettings = new NotificationSettingsInput();
    $request->patchedResidentInput1->notificationSettings->incomingMeldFrequency = IncomingMeldFrequencyEnum::Daily;
    $request->patchedResidentInput1->notificationSettings->smsNotifications = false;
    $request->patchedResidentInput1->notificationSettings->successfulMeldFrequency = SuccessfulMeldFrequencyEnum::Immediately;
    $request->patchedResidentInput1->notificationSettings->timezone = TimezoneEnum::AmericaRegina;
    $request->patchedResidentInput1->units = [
        29950,
        561577,
        737254,
    ];
    $request->id = '61891baa-0fe1-4ade-808e-6f8c5f350d8c';

    $requestSecurity = new ResidentPartialUpdateMultipartSecurity();
    $requestSecurity->pmoAuth2Authentication = '';

    $response = $sdk->resident->residentPartialUpdateMultipart($request, $requestSecurity);

    if ($response->resident !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                           | Type                                                                                                                                                | Required                                                                                                                                            | Description                                                                                                                                         |
| --------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                          | [\PropertyMeld\MeldAPI\Models\Operations\ResidentPartialUpdateMultipartRequest](../../models/operations/ResidentPartialUpdateMultipartRequest.md)   | :heavy_check_mark:                                                                                                                                  | The request object to use for the request.                                                                                                          |
| `security`                                                                                                                                          | [\PropertyMeld\MeldAPI\Models\Operations\ResidentPartialUpdateMultipartSecurity](../../models/operations/ResidentPartialUpdateMultipartSecurity.md) | :heavy_check_mark:                                                                                                                                  | The security requirements to use for the request.                                                                                                   |


### Response

**[?\PropertyMeld\MeldAPI\Models\Operations\ResidentPartialUpdateMultipartResponse](../../models/operations/ResidentPartialUpdateMultipartResponse.md)**


## residentRetrieve

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \PropertyMeld\MeldAPI\MeldAPI;
use \PropertyMeld\MeldAPI\Models\Operations\ResidentRetrieveRequest;
use \PropertyMeld\MeldAPI\Models\Operations\ResidentRetrieveSecurity;

$sdk = MeldAPI::builder()
    ->build();

try {
    $request = new ResidentRetrieveRequest();
    $request->id = 'db5a3418-1430-4104-a181-3d5208ece7e2';

    $requestSecurity = new ResidentRetrieveSecurity();
    $requestSecurity->pmoAuth2Authentication = '';

    $response = $sdk->resident->residentRetrieve($request, $requestSecurity);

    if ($response->resident !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                               | Type                                                                                                                    | Required                                                                                                                | Description                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                              | [\PropertyMeld\MeldAPI\Models\Operations\ResidentRetrieveRequest](../../models/operations/ResidentRetrieveRequest.md)   | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |
| `security`                                                                                                              | [\PropertyMeld\MeldAPI\Models\Operations\ResidentRetrieveSecurity](../../models/operations/ResidentRetrieveSecurity.md) | :heavy_check_mark:                                                                                                      | The security requirements to use for the request.                                                                       |


### Response

**[?\PropertyMeld\MeldAPI\Models\Operations\ResidentRetrieveResponse](../../models/operations/ResidentRetrieveResponse.md)**


## residentUpdateForm

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \PropertyMeld\MeldAPI\MeldAPI;
use \PropertyMeld\MeldAPI\Models\Operations\ResidentUpdateFormRequest;
use \PropertyMeld\MeldAPI\Models\Shared\ResidentInput1;
use \PropertyMeld\MeldAPI\Models\Shared\Contact;
use \PropertyMeld\MeldAPI\Models\Shared\NotificationSettingsInput;
use \PropertyMeld\MeldAPI\Models\Shared\IncomingMeldFrequencyEnum;
use \PropertyMeld\MeldAPI\Models\Shared\SuccessfulMeldFrequencyEnum;
use \PropertyMeld\MeldAPI\Models\Shared\TimezoneEnum;
use \PropertyMeld\MeldAPI\Models\Operations\ResidentUpdateFormSecurity;

$sdk = MeldAPI::builder()
    ->build();

try {
    $request = new ResidentUpdateFormRequest();
    $request->residentInput1 = new ResidentInput1();
    $request->residentInput1->address = 'veniam';
    $request->residentInput1->contact = new Contact();
    $request->residentInput1->contact->businessPhone = 'nesciunt';
    $request->residentInput1->contact->businessPhoneExt = 'expedita';
    $request->residentInput1->contact->cellPhone = 'eum';
    $request->residentInput1->contact->cellPhoneExt = 'vel';
    $request->residentInput1->contact->fax = 'voluptatum';
    $request->residentInput1->contact->homePhone = 'magnam';
    $request->residentInput1->contact->homePhoneExt = 'exercitationem';
    $request->residentInput1->contact->primaryEmail = 'Oswald.Jones92@gmail.com';
    $request->residentInput1->contact->secondaryEmail = 'Alessia.Heller39@gmail.com';
    $request->residentInput1->contact->tertiaryEmail = 'Shaina.Orn98@hotmail.com';
    $request->residentInput1->firstName = 'Terrence';
    $request->residentInput1->invite = false;
    $request->residentInput1->lastName = 'Rowe';
    $request->residentInput1->middleName = 'occaecati';
    $request->residentInput1->notes = 'nemo';
    $request->residentInput1->notificationSettings = new NotificationSettingsInput();
    $request->residentInput1->notificationSettings->incomingMeldFrequency = IncomingMeldFrequencyEnum::Daily;
    $request->residentInput1->notificationSettings->smsNotifications = false;
    $request->residentInput1->notificationSettings->successfulMeldFrequency = SuccessfulMeldFrequencyEnum::Daily;
    $request->residentInput1->notificationSettings->timezone = TimezoneEnum::CanadaSaskatchewan;
    $request->residentInput1->units = [
        254025,
        364912,
    ];
    $request->id = '84273a84-18d1-4623-89fb-0929921aefb9';

    $requestSecurity = new ResidentUpdateFormSecurity();
    $requestSecurity->pmoAuth2Authentication = '';

    $response = $sdk->resident->residentUpdateForm($request, $requestSecurity);

    if ($response->resident !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                   | Type                                                                                                                        | Required                                                                                                                    | Description                                                                                                                 |
| --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                  | [\PropertyMeld\MeldAPI\Models\Operations\ResidentUpdateFormRequest](../../models/operations/ResidentUpdateFormRequest.md)   | :heavy_check_mark:                                                                                                          | The request object to use for the request.                                                                                  |
| `security`                                                                                                                  | [\PropertyMeld\MeldAPI\Models\Operations\ResidentUpdateFormSecurity](../../models/operations/ResidentUpdateFormSecurity.md) | :heavy_check_mark:                                                                                                          | The security requirements to use for the request.                                                                           |


### Response

**[?\PropertyMeld\MeldAPI\Models\Operations\ResidentUpdateFormResponse](../../models/operations/ResidentUpdateFormResponse.md)**


## residentUpdateJson

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \PropertyMeld\MeldAPI\MeldAPI;
use \PropertyMeld\MeldAPI\Models\Operations\ResidentUpdateJsonRequest;
use \PropertyMeld\MeldAPI\Models\Shared\ResidentInput;
use \PropertyMeld\MeldAPI\Models\Shared\ResidentAddress;
use \PropertyMeld\MeldAPI\Models\Shared\Contact;
use \PropertyMeld\MeldAPI\Models\Shared\NotificationSettingsInput;
use \PropertyMeld\MeldAPI\Models\Shared\IncomingMeldFrequencyEnum;
use \PropertyMeld\MeldAPI\Models\Shared\SuccessfulMeldFrequencyEnum;
use \PropertyMeld\MeldAPI\Models\Shared\TimezoneEnum;
use \PropertyMeld\MeldAPI\Models\Operations\ResidentUpdateJsonSecurity;

$sdk = MeldAPI::builder()
    ->build();

try {
    $request = new ResidentUpdateJsonRequest();
    $request->residentInput = new ResidentInput();
    $request->residentInput->address = new ResidentAddress();
    $request->residentInput->address->city = 'Framingham';
    $request->residentInput->address->country = 'Liechtenstein';
    $request->residentInput->address->countyProvince = 'maxime';
    $request->residentInput->address->line1 = 'magnam';
    $request->residentInput->address->line2 = 'temporibus';
    $request->residentInput->address->line3 = 'quos';
    $request->residentInput->address->postcode = '94592';
    $request->residentInput->contact = new Contact();
    $request->residentInput->contact->businessPhone = 'nam';
    $request->residentInput->contact->businessPhoneExt = 'vero';
    $request->residentInput->contact->cellPhone = 'voluptatem';
    $request->residentInput->contact->cellPhoneExt = 'ipsam';
    $request->residentInput->contact->fax = 'vel';
    $request->residentInput->contact->homePhone = 'alias';
    $request->residentInput->contact->homePhoneExt = 'quasi';
    $request->residentInput->contact->primaryEmail = 'Wilford_Hamill@gmail.com';
    $request->residentInput->contact->secondaryEmail = 'Jaden_Hickle@yahoo.com';
    $request->residentInput->contact->tertiaryEmail = 'Kiana_Thompson90@yahoo.com';
    $request->residentInput->firstName = 'Zachariah';
    $request->residentInput->invite = false;
    $request->residentInput->lastName = 'Jakubowski';
    $request->residentInput->middleName = 'voluptas';
    $request->residentInput->notes = 'debitis';
    $request->residentInput->notificationSettings = new NotificationSettingsInput();
    $request->residentInput->notificationSettings->incomingMeldFrequency = IncomingMeldFrequencyEnum::Never;
    $request->residentInput->notificationSettings->smsNotifications = false;
    $request->residentInput->notificationSettings->successfulMeldFrequency = SuccessfulMeldFrequencyEnum::Immediately;
    $request->residentInput->notificationSettings->timezone = TimezoneEnum::EuropeSaratov;
    $request->residentInput->units = [
        675689,
        231070,
        244889,
    ];
    $request->id = '83c2beb4-7737-43c8-972f-64d1db1f2c43';

    $requestSecurity = new ResidentUpdateJsonSecurity();
    $requestSecurity->pmoAuth2Authentication = '';

    $response = $sdk->resident->residentUpdateJson($request, $requestSecurity);

    if ($response->resident !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                   | Type                                                                                                                        | Required                                                                                                                    | Description                                                                                                                 |
| --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                  | [\PropertyMeld\MeldAPI\Models\Operations\ResidentUpdateJsonRequest](../../models/operations/ResidentUpdateJsonRequest.md)   | :heavy_check_mark:                                                                                                          | The request object to use for the request.                                                                                  |
| `security`                                                                                                                  | [\PropertyMeld\MeldAPI\Models\Operations\ResidentUpdateJsonSecurity](../../models/operations/ResidentUpdateJsonSecurity.md) | :heavy_check_mark:                                                                                                          | The security requirements to use for the request.                                                                           |


### Response

**[?\PropertyMeld\MeldAPI\Models\Operations\ResidentUpdateJsonResponse](../../models/operations/ResidentUpdateJsonResponse.md)**


## residentUpdateMultipart

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \PropertyMeld\MeldAPI\MeldAPI;
use \PropertyMeld\MeldAPI\Models\Operations\ResidentUpdateMultipartRequest;
use \PropertyMeld\MeldAPI\Models\Shared\ResidentInput1;
use \PropertyMeld\MeldAPI\Models\Shared\Contact;
use \PropertyMeld\MeldAPI\Models\Shared\NotificationSettingsInput;
use \PropertyMeld\MeldAPI\Models\Shared\IncomingMeldFrequencyEnum;
use \PropertyMeld\MeldAPI\Models\Shared\SuccessfulMeldFrequencyEnum;
use \PropertyMeld\MeldAPI\Models\Shared\TimezoneEnum;
use \PropertyMeld\MeldAPI\Models\Operations\ResidentUpdateMultipartSecurity;

$sdk = MeldAPI::builder()
    ->build();

try {
    $request = new ResidentUpdateMultipartRequest();
    $request->residentInput1 = new ResidentInput1();
    $request->residentInput1->address = 'illo';
    $request->residentInput1->contact = new Contact();
    $request->residentInput1->contact->businessPhone = 'accusantium';
    $request->residentInput1->contact->businessPhoneExt = 'vel';
    $request->residentInput1->contact->cellPhone = 'ea';
    $request->residentInput1->contact->cellPhoneExt = 'beatae';
    $request->residentInput1->contact->fax = 'vero';
    $request->residentInput1->contact->homePhone = 'excepturi';
    $request->residentInput1->contact->homePhoneExt = 'eum';
    $request->residentInput1->contact->primaryEmail = 'Ed.Metz77@gmail.com';
    $request->residentInput1->contact->secondaryEmail = 'Leonora39@hotmail.com';
    $request->residentInput1->contact->tertiaryEmail = 'Deangelo22@hotmail.com';
    $request->residentInput1->firstName = 'Jayne';
    $request->residentInput1->invite = false;
    $request->residentInput1->lastName = 'Bailey';
    $request->residentInput1->middleName = 'doloremque';
    $request->residentInput1->notes = 'consequatur';
    $request->residentInput1->notificationSettings = new NotificationSettingsInput();
    $request->residentInput1->notificationSettings->incomingMeldFrequency = IncomingMeldFrequencyEnum::Daily;
    $request->residentInput1->notificationSettings->smsNotifications = false;
    $request->residentInput1->notificationSettings->successfulMeldFrequency = SuccessfulMeldFrequencyEnum::Never;
    $request->residentInput1->notificationSettings->timezone = TimezoneEnum::AsiaAshkhabad;
    $request->residentInput1->units = [
        377406,
        705148,
        809365,
    ];
    $request->id = '9b8f759e-ac55-4a97-81d3-11352965bb8a';

    $requestSecurity = new ResidentUpdateMultipartSecurity();
    $requestSecurity->pmoAuth2Authentication = '';

    $response = $sdk->resident->residentUpdateMultipart($request, $requestSecurity);

    if ($response->resident !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                             | Type                                                                                                                                  | Required                                                                                                                              | Description                                                                                                                           |
| ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                            | [\PropertyMeld\MeldAPI\Models\Operations\ResidentUpdateMultipartRequest](../../models/operations/ResidentUpdateMultipartRequest.md)   | :heavy_check_mark:                                                                                                                    | The request object to use for the request.                                                                                            |
| `security`                                                                                                                            | [\PropertyMeld\MeldAPI\Models\Operations\ResidentUpdateMultipartSecurity](../../models/operations/ResidentUpdateMultipartSecurity.md) | :heavy_check_mark:                                                                                                                    | The security requirements to use for the request.                                                                                     |


### Response

**[?\PropertyMeld\MeldAPI\Models\Operations\ResidentUpdateMultipartResponse](../../models/operations/ResidentUpdateMultipartResponse.md)**

