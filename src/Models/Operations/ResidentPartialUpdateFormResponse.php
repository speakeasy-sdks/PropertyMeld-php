<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace PropertyMeld\MeldAPI\Models\Operations;


class ResidentPartialUpdateFormResponse
{
	
    public string $contentType;
    
	
    public ?\PropertyMeld\MeldAPI\Models\Shared\Resident $resident = null;
    
	
    public int $statusCode;
    
	
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->resident = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
	}
}
