# propertymeld/meldapi

<!-- Start SDK Installation -->
## SDK Installation

### Composer

To install the SDK first add the below to your `composer.json` file:

```json
{
    "repositories": [
        {
            "type": "github",
            "url": "https://github.com/speakeasy-sdks/PropertyMeld-php.git"
        }
    ],
    "require": {
        "propertymeld/meldapi": "*"
    }
}
```

Then run the following command:

```bash
composer update
```
<!-- End SDK Installation -->

## SDK Example Usage
<!-- Start SDK Example Usage -->
```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \PropertyMeld\MeldAPI\MeldAPI;
use \PropertyMeld\MeldAPI\Models\Operations\BuildingListRequest;
use \PropertyMeld\MeldAPI\Models\Operations\BuildingListSecurity;

$sdk = MeldAPI::builder()
    ->build();

try {
    $request = new BuildingListRequest();
    $request->xPmOrg = 548814;
    $request->limit = 592845;
    $request->offset = 715190;
    $request->ordering = 'quibusdam';

    $requestSecurity = new BuildingListSecurity();
    $requestSecurity->pmoAuth2Authentication = '';

    $response = $sdk->building->buildingList($request, $requestSecurity);

    if ($response->paginatedBuildingSerializerListList !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```
<!-- End SDK Example Usage -->

<!-- Start SDK Available Operations -->
## Available Resources and Operations


### [building](docs/building/README.md)

* [buildingList](docs/building/README.md#buildinglist)
* [buildingRetrieve](docs/building/README.md#buildingretrieve)

### [checkToken](docs/checktoken/README.md)

* [checkTokenRetrieve](docs/checktoken/README.md#checktokenretrieve) - Used to check the validity of an oauth2 token

### [estimates](docs/estimates/README.md)

* [estimatesList](docs/estimates/README.md#estimateslist)
* [estimatesRetrieve](docs/estimates/README.md#estimatesretrieve)

### [expenditure](docs/expenditure/README.md)

* [expenditureList](docs/expenditure/README.md#expenditurelist)
* [expenditureRetrieve](docs/expenditure/README.md#expenditureretrieve)

### [floor](docs/floor/README.md)

* [floorList](docs/floor/README.md#floorlist)
* [floorRetrieve](docs/floor/README.md#floorretrieve)

### [invoice](docs/invoice/README.md)

* [invoiceAttachmentRetrieve](docs/invoice/README.md#invoiceattachmentretrieve)
* [invoiceList](docs/invoice/README.md#invoicelist)
* [invoiceRetrieve](docs/invoice/README.md#invoiceretrieve)

### [managementAgent](docs/managementagent/README.md)

* [managementAgentList](docs/managementagent/README.md#managementagentlist)
* [managementAgentRetrieve](docs/managementagent/README.md#managementagentretrieve)

### [managerFile](docs/managerfile/README.md)

* [managerFileList](docs/managerfile/README.md#managerfilelist)

### [meld](docs/meld/README.md)

* [meldList](docs/meld/README.md#meldlist)
* [meldManagerFilesList](docs/meld/README.md#meldmanagerfileslist)
* [meldRetrieve](docs/meld/README.md#meldretrieve)
* [meldTenantFilesList](docs/meld/README.md#meldtenantfileslist)
* [meldVendorFilesList](docs/meld/README.md#meldvendorfileslist)

### [owner](docs/owner/README.md)

* [ownerCreate](docs/owner/README.md#ownercreate)
* [ownerDestroy](docs/owner/README.md#ownerdestroy)
* [ownerList](docs/owner/README.md#ownerlist)
* [ownerPartialUpdate](docs/owner/README.md#ownerpartialupdate)
* [ownerRetrieve](docs/owner/README.md#ownerretrieve)
* [ownerUpdate](docs/owner/README.md#ownerupdate)

### [ping](docs/ping/README.md)

* [pingRetrieve](docs/ping/README.md#pingretrieve) - Used to double check that the api is up an running.

### [project](docs/project/README.md)

* [projectList](docs/project/README.md#projectlist)
* [projectRetrieve](docs/project/README.md#projectretrieve)

### [property](docs/property/README.md)

* [propertyCreate](docs/property/README.md#propertycreate)
* [propertyDestroy](docs/property/README.md#propertydestroy)
* [propertyList](docs/property/README.md#propertylist)
* [propertyPartialUpdate](docs/property/README.md#propertypartialupdate)
* [propertyRetrieve](docs/property/README.md#propertyretrieve)
* [propertyUpdate](docs/property/README.md#propertyupdate)

### [propertyGroup](docs/propertygroup/README.md)

* [propertyGroupList](docs/propertygroup/README.md#propertygrouplist)
* [propertyGroupRetrieve](docs/propertygroup/README.md#propertygroupretrieve)

### [resident](docs/resident/README.md)

* [residentCreateForm](docs/resident/README.md#residentcreateform)
* [residentCreateJson](docs/resident/README.md#residentcreatejson)
* [residentCreateMultipart](docs/resident/README.md#residentcreatemultipart)
* [residentDestroy](docs/resident/README.md#residentdestroy)
* [residentList](docs/resident/README.md#residentlist)
* [residentPartialUpdateForm](docs/resident/README.md#residentpartialupdateform)
* [residentPartialUpdateJson](docs/resident/README.md#residentpartialupdatejson)
* [residentPartialUpdateMultipart](docs/resident/README.md#residentpartialupdatemultipart)
* [residentRetrieve](docs/resident/README.md#residentretrieve)
* [residentUpdateForm](docs/resident/README.md#residentupdateform)
* [residentUpdateJson](docs/resident/README.md#residentupdatejson)
* [residentUpdateMultipart](docs/resident/README.md#residentupdatemultipart)

### [residentFile](docs/residentfile/README.md)

* [residentFileList](docs/residentfile/README.md#residentfilelist)

### [schema](docs/schema/README.md)

* [schemaRetrieve](docs/schema/README.md#schemaretrieve) - OpenApi3 schema for this API. Format can be selected via content negotiation.

- YAML: application/vnd.oai.openapi
- JSON: application/vnd.oai.openapi+json

### [unit](docs/unit/README.md)

* [unitCreate](docs/unit/README.md#unitcreate)
* [unitDestroy](docs/unit/README.md#unitdestroy)
* [unitList](docs/unit/README.md#unitlist)
* [unitPartialUpdate](docs/unit/README.md#unitpartialupdate)
* [unitRetrieve](docs/unit/README.md#unitretrieve)
* [unitUpdate](docs/unit/README.md#unitupdate)

### [vendor](docs/vendor/README.md)

* [vendorDestroy](docs/vendor/README.md#vendordestroy)
* [vendorList](docs/vendor/README.md#vendorlist)
* [vendorRetrieve](docs/vendor/README.md#vendorretrieve)

### [vendorFile](docs/vendorfile/README.md)

* [vendorFileList](docs/vendorfile/README.md#vendorfilelist)

### [vendorInvite](docs/vendorinvite/README.md)

* [vendorInviteCreate](docs/vendorinvite/README.md#vendorinvitecreate)

### [workLog](docs/worklog/README.md)

* [workLogList](docs/worklog/README.md#workloglist)
* [workLogRetrieve](docs/worklog/README.md#worklogretrieve)
<!-- End SDK Available Operations -->

### Maturity

This SDK is in beta, and there may be breaking changes between versions without a major version update. Therefore, we recommend pinning usage
to a specific package version. This way, you can install the same version each time without breaking changes unless you are intentionally
looking for the latest version.

### Contributions

While we value open-source contributions to this SDK, this library is generated programmatically.
Feel free to open a PR or a Github issue as a proof of concept and we'll do our best to include it in a future release !

### SDK Created by [Speakeasy](https://docs.speakeasyapi.dev/docs/using-speakeasy/client-sdks)
