<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace PropertyMeld\MeldAPI\Models\Operations;

use \PropertyMeld\MeldAPI\Utils\SpeakeasyMetadata;
class ResidentRetrieveSecurity
{
	#[SpeakeasyMetadata('security:scheme=true,type=http,subtype=bearer,name=Authorization')]
    public string $pmoAuth2Authentication;
    
	public function __construct()
	{
		$this->pmoAuth2Authentication = "";
	}
}
