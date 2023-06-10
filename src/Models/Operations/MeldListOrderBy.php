<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace PropertyMeld\MeldAPI\Models\Operations;


/** Ordering */
enum MeldListOrderBy: string
{
    case OwnerApprovalRequestDate = 'owner_approval_request_date';
    case MinusOwnerApprovalRequestDate = '-owner_approval_request_date';
}
