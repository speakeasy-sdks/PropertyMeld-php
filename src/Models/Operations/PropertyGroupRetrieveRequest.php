<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace PropertyMeld\MeldAPI\Models\Operations;

use \PropertyMeld\MeldAPI\Utils\SpeakeasyMetadata;
class PropertyGroupRetrieveRequest
{
    /**
     * The management ID (MID), found in the first number of your URL when logged in:  https://app.propertymeld.com/{MID}/m/123
     * 
     * @var int $xPmOrg
     */
	#[SpeakeasyMetadata('header:style=simple,explode=false,name=X-Pm-Org')]
    public int $xPmOrg;
    
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=id')]
    public string $id;
    
	public function __construct()
	{
		$this->xPmOrg = 0;
		$this->id = "";
	}
}
