<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace PropertyMeld\MeldAPI\Models\Shared;


class PMApiMeldfile
{
	#[\JMS\Serializer\Annotation\SerializedName('cloned')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $cloned = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('created')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    public \DateTime $created;
    
	#[\JMS\Serializer\Annotation\SerializedName('filename')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $filename;
    
	#[\JMS\Serializer\Annotation\SerializedName('hidden_from_owner')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $hiddenFromOwner = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('hidden_from_tenant')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $hiddenFromTenant = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('hidden_from_vendor')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $hiddenFromVendor = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $id;
    
	#[\JMS\Serializer\Annotation\SerializedName('meld')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $meld;
    
	#[\JMS\Serializer\Annotation\SerializedName('updated')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    public \DateTime $updated;
    
	#[\JMS\Serializer\Annotation\SerializedName('uploader')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $uploader = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('url')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $url;
    
	public function __construct()
	{
		$this->cloned = null;
		$this->created = new \DateTime();
		$this->filename = "";
		$this->hiddenFromOwner = null;
		$this->hiddenFromTenant = null;
		$this->hiddenFromVendor = null;
		$this->id = 0;
		$this->meld = 0;
		$this->updated = new \DateTime();
		$this->uploader = null;
		$this->url = "";
	}
}
