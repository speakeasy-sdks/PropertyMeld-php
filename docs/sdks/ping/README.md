# ping

### Available Operations

* [pingRetrieve](#pingretrieve) - Used to double check that the api is up an running.

## pingRetrieve

Used to double check that the api is up an running.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \PropertyMeld\MeldAPI\MeldAPI;

$sdk = MeldAPI::builder()
    ->build();

try {
    $response = $sdk->ping->pingRetrieve();

    if ($response->pingRetrieve200ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```


### Response

**[?\PropertyMeld\MeldAPI\Models\Operations\PingRetrieveResponse](../../models/operations/PingRetrieveResponse.md)**

