<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace PropertyMeld\MeldAPI\Models\Shared;

use \PropertyMeld\MeldAPI\Utils\SpeakeasyMetadata;
class PatchedOwnerInput
{
	#[\JMS\Serializer\Annotation\SerializedName('address')]
    #[\JMS\Serializer\Annotation\Type('PropertyMeld\MeldAPI\Models\Shared\Address')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    #[SpeakeasyMetadata('form:name=address,json=true')]
    #[SpeakeasyMetadata('multipartForm:name=address,json=true')]
    public ?Address $address = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('contact')]
    #[\JMS\Serializer\Annotation\Type('PropertyMeld\MeldAPI\Models\Shared\Contact')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    #[SpeakeasyMetadata('form:name=contact,json=true')]
    #[SpeakeasyMetadata('multipartForm:name=contact,json=true')]
    public ?Contact $contact = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('email')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    #[SpeakeasyMetadata('form:name=email')]
    #[SpeakeasyMetadata('multipartForm:name=email')]
    public ?string $email = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('first_name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    #[SpeakeasyMetadata('form:name=first_name')]
    #[SpeakeasyMetadata('multipartForm:name=first_name')]
    public ?string $firstName = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('hub_access_level')]
    #[\JMS\Serializer\Annotation\Type('enum<PropertyMeld\MeldAPI\Models\Shared\HubAccessLevelEnum>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    #[SpeakeasyMetadata('form:name=hub_access_level')]
    #[SpeakeasyMetadata('multipartForm:name=hub_access_level')]
    public ?HubAccessLevelEnum $hubAccessLevel = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('invited_to_hub')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    #[SpeakeasyMetadata('form:name=invited_to_hub')]
    #[SpeakeasyMetadata('multipartForm:name=invited_to_hub')]
    public ?bool $invitedToHub = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('last_name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    #[SpeakeasyMetadata('form:name=last_name')]
    #[SpeakeasyMetadata('multipartForm:name=last_name')]
    public ?string $lastName = null;
    
    /**
     * $properties
     * 
     * @var ?array<int> $properties
     */
	#[\JMS\Serializer\Annotation\SerializedName('properties')]
    #[\JMS\Serializer\Annotation\Type('array<int>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    #[SpeakeasyMetadata('form:name=properties')]
    #[SpeakeasyMetadata('multipartForm:name=properties')]
    public ?array $properties = null;
    
	public function __construct()
	{
		$this->address = null;
		$this->contact = null;
		$this->email = null;
		$this->firstName = null;
		$this->hubAccessLevel = null;
		$this->invitedToHub = null;
		$this->lastName = null;
		$this->properties = null;
	}
}
