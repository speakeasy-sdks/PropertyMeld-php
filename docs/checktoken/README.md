# checkToken

### Available Operations

* [checkTokenRetrieve](#checktokenretrieve) - Used to check the validity of an oauth2 token

## checkTokenRetrieve

Used to check the validity of an oauth2 token

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \PropertyMeld\MeldAPI\MeldAPI;
use \PropertyMeld\MeldAPI\Models\Operations\CheckTokenRetrieveSecurity;

$sdk = MeldAPI::builder()
    ->build();

try {
    $requestSecurity = new CheckTokenRetrieveSecurity();
    $requestSecurity->pmoAuth2Authentication = '';

    $response = $sdk->checkToken->checkTokenRetrieve($requestSecurity);

    if ($response->checkTokenRetrieve200ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```
