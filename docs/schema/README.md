# schema

### Available Operations

* [schemaRetrieve](#schemaretrieve) - OpenApi3 schema for this API. Format can be selected via content negotiation.

- YAML: application/vnd.oai.openapi
- JSON: application/vnd.oai.openapi+json

## schemaRetrieve

OpenApi3 schema for this API. Format can be selected via content negotiation.

- YAML: application/vnd.oai.openapi
- JSON: application/vnd.oai.openapi+json

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \PropertyMeld\MeldAPI\MeldAPI;
use \PropertyMeld\MeldAPI\Models\Operations\SchemaRetrieveRequest;
use \PropertyMeld\MeldAPI\Models\Operations\SchemaRetrieveFormat;
use \PropertyMeld\MeldAPI\Models\Operations\SchemaRetrieveSecurity;

$sdk = MeldAPI::builder()
    ->build();

try {
    $request = new SchemaRetrieveRequest();
    $request->xPmOrg = 425402;
    $request->format = SchemaRetrieveFormat::JSON;

    $requestSecurity = new SchemaRetrieveSecurity();
    $requestSecurity->pmoAuth2Authentication = '';

    $response = $sdk->schema->schemaRetrieve($request, $requestSecurity);

    if ($response->schemaRetrieve200ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```
