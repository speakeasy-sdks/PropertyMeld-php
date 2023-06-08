<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace PropertyMeld\MeldAPI\Models\Shared;


class PaginatedMeldExpendituresListViewSerializerListList
{
	#[\JMS\Serializer\Annotation\SerializedName('count')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $count = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('next')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $next = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('previous')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $previous = null;
    
    /**
     * $results
     * 
     * @var ?array<\PropertyMeld\MeldAPI\Models\Shared\MeldExpendituresListViewSerializerList> $results
     */
	#[\JMS\Serializer\Annotation\SerializedName('results')]
    #[\JMS\Serializer\Annotation\Type('array<PropertyMeld\MeldAPI\Models\Shared\MeldExpendituresListViewSerializerList>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $results = null;
    
	public function __construct()
	{
		$this->count = null;
		$this->next = null;
		$this->previous = null;
		$this->results = null;
	}
}
