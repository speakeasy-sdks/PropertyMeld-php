# invoice

### Available Operations

* [invoiceAttachmentRetrieve](#invoiceattachmentretrieve)
* [invoiceList](#invoicelist)
* [invoiceRetrieve](#invoiceretrieve)

## invoiceAttachmentRetrieve

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \PropertyMeld\MeldAPI\MeldAPI;
use \PropertyMeld\MeldAPI\Models\Operations\InvoiceAttachmentRetrieveRequest;
use \PropertyMeld\MeldAPI\Models\Operations\InvoiceAttachmentRetrieveSecurity;

$sdk = MeldAPI::builder()
    ->build();

try {
    $request = new InvoiceAttachmentRetrieveRequest();
    $request->id = 'e6e13b99-d488-4e1e-91e4-50ad2abd4426';

    $requestSecurity = new InvoiceAttachmentRetrieveSecurity();
    $requestSecurity->pmoAuth2Authentication = '';

    $response = $sdk->invoice->invoiceAttachmentRetrieve($request, $requestSecurity);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                 | Type                                                                                                                                      | Required                                                                                                                                  | Description                                                                                                                               |
| ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                | [\PropertyMeld\MeldAPI\Models\Operations\InvoiceAttachmentRetrieveRequest](../../models/operations/InvoiceAttachmentRetrieveRequest.md)   | :heavy_check_mark:                                                                                                                        | The request object to use for the request.                                                                                                |
| `security`                                                                                                                                | [\PropertyMeld\MeldAPI\Models\Operations\InvoiceAttachmentRetrieveSecurity](../../models/operations/InvoiceAttachmentRetrieveSecurity.md) | :heavy_check_mark:                                                                                                                        | The security requirements to use for the request.                                                                                         |


### Response

**[?\PropertyMeld\MeldAPI\Models\Operations\InvoiceAttachmentRetrieveResponse](../../models/operations/InvoiceAttachmentRetrieveResponse.md)**


## invoiceList

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \PropertyMeld\MeldAPI\MeldAPI;
use \PropertyMeld\MeldAPI\Models\Operations\InvoiceListRequest;
use \PropertyMeld\MeldAPI\Models\Operations\InvoiceListDeclined;
use \PropertyMeld\MeldAPI\Models\Operations\InvoiceListPaid;
use \PropertyMeld\MeldAPI\Models\Operations\InvoiceListStatus;
use \PropertyMeld\MeldAPI\Models\Operations\InvoiceListSecurity;

$sdk = MeldAPI::builder()
    ->build();

try {
    $request = new InvoiceListRequest();
    $request->xPmOrg = 586513;
    $request->createdGte = 'quos';
    $request->createdInterval = 'perferendis';
    $request->createdLte = 'magni';
    $request->declined = InvoiceListDeclined::False;
    $request->limit = 369808;
    $request->offset = 4695;
    $request->ordering = 'fugit';
    $request->paid = InvoiceListPaid::True;
    $request->paymentRequestedGte = 'excepturi';
    $request->paymentRequestedInterval = 'tempora';
    $request->paymentRequestedLte = 'facilis';
    $request->status = InvoiceListStatus::Approved;
    $request->vendor = 'labore';
    $request->vendors = 'delectus';

    $requestSecurity = new InvoiceListSecurity();
    $requestSecurity->pmoAuth2Authentication = '';

    $response = $sdk->invoice->invoiceList($request, $requestSecurity);

    if ($response->paginatedMeldInvoiceSerializerListList !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                     | Type                                                                                                          | Required                                                                                                      | Description                                                                                                   |
| ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                    | [\PropertyMeld\MeldAPI\Models\Operations\InvoiceListRequest](../../models/operations/InvoiceListRequest.md)   | :heavy_check_mark:                                                                                            | The request object to use for the request.                                                                    |
| `security`                                                                                                    | [\PropertyMeld\MeldAPI\Models\Operations\InvoiceListSecurity](../../models/operations/InvoiceListSecurity.md) | :heavy_check_mark:                                                                                            | The security requirements to use for the request.                                                             |


### Response

**[?\PropertyMeld\MeldAPI\Models\Operations\InvoiceListResponse](../../models/operations/InvoiceListResponse.md)**


## invoiceRetrieve

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \PropertyMeld\MeldAPI\MeldAPI;
use \PropertyMeld\MeldAPI\Models\Operations\InvoiceRetrieveRequest;
use \PropertyMeld\MeldAPI\Models\Operations\InvoiceRetrieveSecurity;

$sdk = MeldAPI::builder()
    ->build();

try {
    $request = new InvoiceRetrieveRequest();
    $request->xPmOrg = 433288;
    $request->id = '3c969e9a-3efa-477d-bb14-cd66ae395efb';

    $requestSecurity = new InvoiceRetrieveSecurity();
    $requestSecurity->pmoAuth2Authentication = '';

    $response = $sdk->invoice->invoiceRetrieve($request, $requestSecurity);

    if ($response->meldInvoiceSerializerDetail !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                             | Type                                                                                                                  | Required                                                                                                              | Description                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                            | [\PropertyMeld\MeldAPI\Models\Operations\InvoiceRetrieveRequest](../../models/operations/InvoiceRetrieveRequest.md)   | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |
| `security`                                                                                                            | [\PropertyMeld\MeldAPI\Models\Operations\InvoiceRetrieveSecurity](../../models/operations/InvoiceRetrieveSecurity.md) | :heavy_check_mark:                                                                                                    | The security requirements to use for the request.                                                                     |


### Response

**[?\PropertyMeld\MeldAPI\Models\Operations\InvoiceRetrieveResponse](../../models/operations/InvoiceRetrieveResponse.md)**

