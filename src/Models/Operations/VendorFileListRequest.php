<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace PropertyMeld\MeldAPI\Models\Operations;

use \PropertyMeld\MeldAPI\Utils\SpeakeasyMetadata;
class VendorFileListRequest
{
    /**
     * The management ID (MID), found in the first number of your URL when logged in:  https://app.propertymeld.com/{MID}/m/123
     * 
     * @var int $xPmOrg
     */
	#[SpeakeasyMetadata('header:style=simple,explode=false,name=X-Pm-Org')]
    public int $xPmOrg;
    
    /**
     * Number of results to return per page.
     * 
     * @var ?int $limit
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=limit')]
    public ?int $limit = null;
    
    /**
     * The initial index from which to return the results.
     * 
     * @var ?int $offset
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=offset')]
    public ?int $offset = null;
    
    /**
     * Which field to use when ordering the results.
     * 
     * @var ?string $ordering
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=ordering')]
    public ?string $ordering = null;
    
	public function __construct()
	{
		$this->xPmOrg = 0;
		$this->limit = null;
		$this->offset = null;
		$this->ordering = null;
	}
}
