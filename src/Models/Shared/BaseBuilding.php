<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace PropertyMeld\MeldAPI\Models\Shared;


class BaseBuilding
{
    /**
     * $createBy
     * 
     * @var ?array<string, mixed> $createBy
     */
	#[\JMS\Serializer\Annotation\SerializedName('create_by')]
    #[\JMS\Serializer\Annotation\Type('array<string, mixed>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $createBy = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('created')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    public \DateTime $created;
    
	#[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $id;
    
	#[\JMS\Serializer\Annotation\SerializedName('number')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $number;
    
	#[\JMS\Serializer\Annotation\SerializedName('prop')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $prop;
    
    /**
     * $updateBy
     * 
     * @var ?array<string, mixed> $updateBy
     */
	#[\JMS\Serializer\Annotation\SerializedName('update_by')]
    #[\JMS\Serializer\Annotation\Type('array<string, mixed>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $updateBy = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('updated')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    public \DateTime $updated;
    
	public function __construct()
	{
		$this->createBy = null;
		$this->created = new \DateTime();
		$this->id = 0;
		$this->number = "";
		$this->prop = 0;
		$this->updateBy = null;
		$this->updated = new \DateTime();
	}
}
