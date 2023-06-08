<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace PropertyMeld\MeldAPI\Models\Operations;


class VendorFileListResponse
{
	
    public string $contentType;
    
	
    public ?\PropertyMeld\MeldAPI\Models\Shared\PaginatedVendorMeldFileList $paginatedVendorMeldFileList = null;
    
	
    public int $statusCode;
    
	
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->paginatedVendorMeldFileList = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
	}
}
