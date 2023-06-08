<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace PropertyMeld\MeldAPI\Models\Operations;

use \PropertyMeld\MeldAPI\Utils\SpeakeasyMetadata;
class OwnerPartialUpdateRequest
{
	#[SpeakeasyMetadata('request:mediaType=application/json')]
    public ?\PropertyMeld\MeldAPI\Models\Shared\PatchedOwnerInput $patchedOwnerInput = null;
    
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=id')]
    public string $id;
    
	public function __construct()
	{
		$this->patchedOwnerInput = null;
		$this->id = "";
	}
}
