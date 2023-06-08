<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace PropertyMeld\MeldAPI\Models\Shared;


class BasePayment
{
	#[\JMS\Serializer\Annotation\SerializedName('amount')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $amount;
    
	#[\JMS\Serializer\Annotation\SerializedName('amount_refunded')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $amountRefunded = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('check_no')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $checkNo = null;
    
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
    
	#[\JMS\Serializer\Annotation\SerializedName('method')]
    #[\JMS\Serializer\Annotation\Type('enum<PropertyMeld\MeldAPI\Models\Shared\MethodEnum>')]
    public MethodEnum $method;
    
	#[\JMS\Serializer\Annotation\SerializedName('notes')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $notes = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('stripe_charge_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $stripeChargeId = null;
    
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
		$this->amount = "";
		$this->amountRefunded = null;
		$this->checkNo = null;
		$this->createBy = null;
		$this->created = new \DateTime();
		$this->id = 0;
		$this->method = \PropertyMeld\MeldAPI\Models\Shared\MethodEnum::CASH;
		$this->notes = null;
		$this->stripeChargeId = null;
		$this->updateBy = null;
		$this->updated = new \DateTime();
	}
}
