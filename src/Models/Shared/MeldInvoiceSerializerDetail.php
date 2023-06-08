<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace PropertyMeld\MeldAPI\Models\Shared;


class MeldInvoiceSerializerDetail
{
	#[\JMS\Serializer\Annotation\SerializedName('amount')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $amount = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('attachment_url')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $attachmentUrl;
    
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
    
	#[\JMS\Serializer\Annotation\SerializedName('management_agent')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $managementAgent = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('meld')]
    #[\JMS\Serializer\Annotation\Type('PropertyMeld\MeldAPI\Models\Shared\MeldInvoiceListMeld')]
    public MeldInvoiceListMeld $meld;
    
	#[\JMS\Serializer\Annotation\SerializedName('notes')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $notes = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('payment')]
    #[\JMS\Serializer\Annotation\Type('PropertyMeld\MeldAPI\Models\Shared\BasePayment')]
    public BasePayment $payment;
    
	#[\JMS\Serializer\Annotation\SerializedName('payment_requested')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\DateTime $paymentRequested = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('status')]
    #[\JMS\Serializer\Annotation\Type('enum<PropertyMeld\MeldAPI\Models\Shared\Status09fEnum>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?Status09fEnum $status = null;
    
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
    
	#[\JMS\Serializer\Annotation\SerializedName('vendor')]
    #[\JMS\Serializer\Annotation\Type('PropertyMeld\MeldAPI\Models\Shared\MeldInvoiceListVendor')]
    public MeldInvoiceListVendor $vendor;
    
	public function __construct()
	{
		$this->amount = null;
		$this->attachmentUrl = "";
		$this->createBy = null;
		$this->created = new \DateTime();
		$this->id = 0;
		$this->managementAgent = null;
		$this->meld = new \PropertyMeld\MeldAPI\Models\Shared\MeldInvoiceListMeld();
		$this->notes = null;
		$this->payment = new \PropertyMeld\MeldAPI\Models\Shared\BasePayment();
		$this->paymentRequested = null;
		$this->status = null;
		$this->updateBy = null;
		$this->updated = new \DateTime();
		$this->vendor = new \PropertyMeld\MeldAPI\Models\Shared\MeldInvoiceListVendor();
	}
}
