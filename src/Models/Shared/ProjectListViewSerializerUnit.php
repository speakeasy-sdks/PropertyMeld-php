<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace PropertyMeld\MeldAPI\Models\Shared;


class ProjectListViewSerializerUnit
{
	#[\JMS\Serializer\Annotation\SerializedName('apartment')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $apartment = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('created')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    public \DateTime $created;
    
	#[\JMS\Serializer\Annotation\SerializedName('department')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $department = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $id;
    
	#[\JMS\Serializer\Annotation\SerializedName('is_active')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $isActive = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('maintenance_notes')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $maintenanceNotes = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('prop')]
    #[\JMS\Serializer\Annotation\Type('PropertyMeld\MeldAPI\Models\Shared\ProjectListViewSerializerProperty')]
    public ProjectListViewSerializerProperty $prop;
    
	#[\JMS\Serializer\Annotation\SerializedName('room')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $room = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('suite')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $suite = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('unit')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $unit = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('updated')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    public \DateTime $updated;
    
	public function __construct()
	{
		$this->apartment = null;
		$this->created = new \DateTime();
		$this->department = null;
		$this->id = 0;
		$this->isActive = null;
		$this->maintenanceNotes = null;
		$this->prop = new \PropertyMeld\MeldAPI\Models\Shared\ProjectListViewSerializerProperty();
		$this->room = null;
		$this->suite = null;
		$this->unit = null;
		$this->updated = new \DateTime();
	}
}
