<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace PropertyMeld\MeldAPI\Models\Shared;


class ProjectListViewSerializerManagementAgent
{
	#[\JMS\Serializer\Annotation\SerializedName('contact')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $contact = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('created')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    public \DateTime $created;
    
	#[\JMS\Serializer\Annotation\SerializedName('default_invoice_filter')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $defaultInvoiceFilter = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('default_meld_filter')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $defaultMeldFilter = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('first_name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $firstName = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $id;
    
	#[\JMS\Serializer\Annotation\SerializedName('is_active')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $isActive = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('last_name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $lastName = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('role')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $role;
    
	#[\JMS\Serializer\Annotation\SerializedName('updated')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    public \DateTime $updated;
    
	public function __construct()
	{
		$this->contact = null;
		$this->created = new \DateTime();
		$this->defaultInvoiceFilter = null;
		$this->defaultMeldFilter = null;
		$this->firstName = null;
		$this->id = 0;
		$this->isActive = null;
		$this->lastName = null;
		$this->role = 0;
		$this->updated = new \DateTime();
	}
}
