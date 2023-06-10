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


### [building](docs/sdks/building/README.md)

* [buildingList](docs/sdks/building/README.md#buildinglist)
* [buildingRetrieve](docs/sdks/building/README.md#buildingretrieve)

### [checkToken](docs/sdks/checktoken/README.md)

* [checkTokenRetrieve](docs/sdks/checktoken/README.md#checktokenretrieve) - Used to check the validity of an oauth2 token

### [estimates](docs/sdks/estimates/README.md)

* [estimatesList](docs/sdks/estimates/README.md#estimateslist)
* [estimatesRetrieve](docs/sdks/estimates/README.md#estimatesretrieve)

### [expenditure](docs/sdks/expenditure/README.md)

* [expenditureList](docs/sdks/expenditure/README.md#expenditurelist)
* [expenditureRetrieve](docs/sdks/expenditure/README.md#expenditureretrieve)

### [floor](docs/sdks/floor/README.md)

* [floorList](docs/sdks/floor/README.md#floorlist)
* [floorRetrieve](docs/sdks/floor/README.md#floorretrieve)

### [invoice](docs/sdks/invoice/README.md)

* [invoiceAttachmentRetrieve](docs/sdks/invoice/README.md#invoiceattachmentretrieve)
* [invoiceList](docs/sdks/invoice/README.md#invoicelist)
* [invoiceRetrieve](docs/sdks/invoice/README.md#invoiceretrieve)

### [managementAgent](docs/sdks/managementagent/README.md)

* [managementAgentList](docs/sdks/managementagent/README.md#managementagentlist)
* [managementAgentRetrieve](docs/sdks/managementagent/README.md#managementagentretrieve)

### [managerFile](docs/sdks/managerfile/README.md)

* [managerFileList](docs/sdks/managerfile/README.md#managerfilelist)

### [meld](docs/sdks/meld/README.md)

* [meldList](docs/sdks/meld/README.md#meldlist)
* [meldManagerFilesList](docs/sdks/meld/README.md#meldmanagerfileslist)
* [meldRetrieve](docs/sdks/meld/README.md#meldretrieve)
* [meldTenantFilesList](docs/sdks/meld/README.md#meldtenantfileslist)
* [meldVendorFilesList](docs/sdks/meld/README.md#meldvendorfileslist)

### [owner](docs/sdks/owner/README.md)

* [ownerCreate](docs/sdks/owner/README.md#ownercreate)
* [ownerDestroy](docs/sdks/owner/README.md#ownerdestroy)
* [ownerList](docs/sdks/owner/README.md#ownerlist)
* [ownerPartialUpdate](docs/sdks/owner/README.md#ownerpartialupdate)
* [ownerRetrieve](docs/sdks/owner/README.md#ownerretrieve)
* [ownerUpdate](docs/sdks/owner/README.md#ownerupdate)

### [ping](docs/sdks/ping/README.md)

* [pingRetrieve](docs/sdks/ping/README.md#pingretrieve) - Used to double check that the api is up an running.

### [project](docs/sdks/project/README.md)

* [projectList](docs/sdks/project/README.md#projectlist)
* [projectRetrieve](docs/sdks/project/README.md#projectretrieve)

### [property](docs/sdks/property/README.md)

* [propertyCreate](docs/sdks/property/README.md#propertycreate)
* [propertyDestroy](docs/sdks/property/README.md#propertydestroy)
* [propertyList](docs/sdks/property/README.md#propertylist)
* [propertyPartialUpdate](docs/sdks/property/README.md#propertypartialupdate)
* [propertyRetrieve](docs/sdks/property/README.md#propertyretrieve)
* [propertyUpdate](docs/sdks/property/README.md#propertyupdate)

### [propertyGroup](docs/sdks/propertygroup/README.md)

* [propertyGroupList](docs/sdks/propertygroup/README.md#propertygrouplist)
* [propertyGroupRetrieve](docs/sdks/propertygroup/README.md#propertygroupretrieve)

### [resident](docs/sdks/resident/README.md)

* [residentCreateForm](docs/sdks/resident/README.md#residentcreateform)
* [residentCreateJson](docs/sdks/resident/README.md#residentcreatejson)
* [residentCreateMultipart](docs/sdks/resident/README.md#residentcreatemultipart)
* [residentDestroy](docs/sdks/resident/README.md#residentdestroy)
* [residentList](docs/sdks/resident/README.md#residentlist)
* [residentPartialUpdateForm](docs/sdks/resident/README.md#residentpartialupdateform)
* [residentPartialUpdateJson](docs/sdks/resident/README.md#residentpartialupdatejson)
* [residentPartialUpdateMultipart](docs/sdks/resident/README.md#residentpartialupdatemultipart)
* [residentRetrieve](docs/sdks/resident/README.md#residentretrieve)
* [residentUpdateForm](docs/sdks/resident/README.md#residentupdateform)
* [residentUpdateJson](docs/sdks/resident/README.md#residentupdatejson)
* [residentUpdateMultipart](docs/sdks/resident/README.md#residentupdatemultipart)

### [residentFile](docs/sdks/residentfile/README.md)

* [residentFileList](docs/sdks/residentfile/README.md#residentfilelist)

### [schema](docs/sdks/schema/README.md)

* [schemaRetrieve](docs/sdks/schema/README.md#schemaretrieve) - OpenApi3 schema for this API. Format can be selected via content negotiation.

- YAML: application/vnd.oai.openapi
- JSON: application/vnd.oai.openapi+json

### [unit](docs/sdks/unit/README.md)

* [unitCreate](docs/sdks/unit/README.md#unitcreate)
* [unitDestroy](docs/sdks/unit/README.md#unitdestroy)
* [unitList](docs/sdks/unit/README.md#unitlist)
* [unitPartialUpdate](docs/sdks/unit/README.md#unitpartialupdate)
* [unitRetrieve](docs/sdks/unit/README.md#unitretrieve)
* [unitUpdate](docs/sdks/unit/README.md#unitupdate)

### [vendor](docs/sdks/vendor/README.md)

* [vendorDestroy](docs/sdks/vendor/README.md#vendordestroy)
* [vendorList](docs/sdks/vendor/README.md#vendorlist)
* [vendorRetrieve](docs/sdks/vendor/README.md#vendorretrieve)

### [vendorFile](docs/sdks/vendorfile/README.md)

* [vendorFileList](docs/sdks/vendorfile/README.md#vendorfilelist)

### [vendorInvite](docs/sdks/vendorinvite/README.md)

* [vendorInviteCreate](docs/sdks/vendorinvite/README.md#vendorinvitecreate)

### [workLog](docs/sdks/worklog/README.md)

* [workLogList](docs/sdks/worklog/README.md#workloglist)
* [workLogRetrieve](docs/sdks/worklog/README.md#worklogretrieve)
<!-- End SDK Available Operations -->

### Maturity

This SDK is in beta, and there may be breaking changes between versions without a major version update. Therefore, we recommend pinning usage
to a specific package version. This way, you can install the same version each time without breaking changes unless you are intentionally
looking for the latest version.

### Contributions

While we value open-source contributions to this SDK, this library is generated programmatically.
Feel free to open a PR or a Github issue as a proof of concept and we'll do our best to include it in a future release !

### SDK Created by [Speakeasy](https://docs.speakeasyapi.dev/docs/using-speakeasy/client-sdks)
