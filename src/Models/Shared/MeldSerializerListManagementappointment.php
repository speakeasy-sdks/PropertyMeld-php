<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace PropertyMeld\MeldAPI\Models\Shared;


class MeldSerializerListManagementappointment
{
	#[\JMS\Serializer\Annotation\SerializedName('availability_segment')]
    #[\JMS\Serializer\Annotation\Type('PropertyMeld\MeldAPI\Models\Shared\MeldListviewManagementAvailabilitySegment')]
    public MeldListviewManagementAvailabilitySegment $availabilitySegment;
    
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
    
	#[\JMS\Serializer\Annotation\SerializedName('meld')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $meld;
    
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
		$this->availabilitySegment = new \PropertyMeld\MeldAPI\Models\Shared\MeldListviewManagementAvailabilitySegment();
		$this->createBy = null;
		$this->created = new \DateTime();
		$this->id = 0;
		$this->meld = 0;
		$this->updateBy = null;
		$this->updated = new \DateTime();
	}
}
