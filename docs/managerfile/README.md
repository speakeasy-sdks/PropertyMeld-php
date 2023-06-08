# managerFile

### Available Operations

* [managerFileList](#managerfilelist)

## managerFileList

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \PropertyMeld\MeldAPI\MeldAPI;
use \PropertyMeld\MeldAPI\Models\Operations\ManagerFileListRequest;
use \PropertyMeld\MeldAPI\Models\Operations\ManagerFileListSecurity;

$sdk = MeldAPI::builder()
    ->build();

try {
    $request = new ManagerFileListRequest();
    $request->xPmOrg = 968962;
    $request->limit = 652103;
    $request->offset = 320997;
    $request->ordering = 'eum';

    $requestSecurity = new ManagerFileListSecurity();
    $requestSecurity->pmoAuth2Authentication = '';

    $response = $sdk->managerFile->managerFileList($request, $requestSecurity);

    if ($response->paginatedMeldFileList !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```
