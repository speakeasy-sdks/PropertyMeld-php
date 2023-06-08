<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace PropertyMeld\MeldAPI\Models\Operations;


/** owner_approval */
enum MeldListOwnerApproval: string
{
    case OWNER_APPROVAL_NOT_REQUESTED = 'OWNER_APPROVAL_NOT_REQUESTED';
    case OWNER_APPROVAL_REQUESTED = 'OWNER_APPROVAL_REQUESTED';
    case OWNER_APPROVAL_APPROVED = 'OWNER_APPROVAL_APPROVED';
    case OWNER_APPROVAL_NOT_APPROVED = 'OWNER_APPROVAL_NOT_APPROVED';
    case OWNER_APPROVAL_REQUESTED_ESTIMATES = 'OWNER_APPROVAL_REQUESTED_ESTIMATES';
}
