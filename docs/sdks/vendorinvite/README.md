# vendorInvite

### Available Operations

* [vendorInviteCreate](#vendorinvitecreate)

## vendorInviteCreate

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \PropertyMeld\MeldAPI\MeldAPI;
use \PropertyMeld\MeldAPI\Models\Operations\VendorInviteCreateRequest;
use \PropertyMeld\MeldAPI\Models\Shared\VendorInvite;
use \PropertyMeld\MeldAPI\Models\Operations\VendorInviteCreateSecurity;

$sdk = MeldAPI::builder()
    ->build();

try {
    $request = new VendorInviteCreateRequest();
    $request->vendorInvite = new VendorInvite();
    $request->vendorInvite->companyName = 'fugiat';
    $request->vendorInvite->companyPhone = 'unde';
    $request->vendorInvite->email = 'Jeromy62@hotmail.com';
    $request->vendorInvite->firstName = 'Owen';
    $request->vendorInvite->lastName = 'Brown';
    $request->vendorInvite->line1 = 'dignissimos';
    $request->vendorInvite->postcode = '83139';
    $request->xPmOrg = 482584;

    $requestSecurity = new VendorInviteCreateSecurity();
    $requestSecurity->pmoAuth2Authentication = '';

    $response = $sdk->vendorInvite->vendorInviteCreate($request, $requestSecurity);

    if ($response->vendorInvite !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                   | Type                                                                                                                        | Required                                                                                                                    | Description                                                                                                                 |
| --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                  | [\PropertyMeld\MeldAPI\Models\Operations\VendorInviteCreateRequest](../../models/operations/VendorInviteCreateRequest.md)   | :heavy_check_mark:                                                                                                          | The request object to use for the request.                                                                                  |
| `security`                                                                                                                  | [\PropertyMeld\MeldAPI\Models\Operations\VendorInviteCreateSecurity](../../models/operations/VendorInviteCreateSecurity.md) | :heavy_check_mark:                                                                                                          | The security requirements to use for the request.                                                                           |


### Response

**[?\PropertyMeld\MeldAPI\Models\Operations\VendorInviteCreateResponse](../../models/operations/VendorInviteCreateResponse.md)**

