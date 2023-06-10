<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace PropertyMeld\MeldAPI\Models\Operations;


enum EstimatesListEstimateStatus: string
{
    case EstimateApproved = 'ESTIMATE_APPROVED';
    case EstimateClosed = 'ESTIMATE_CLOSED';
    case EstimateInProgress = 'ESTIMATE_IN_PROGRESS';
    case EstimateOwnerRejected = 'ESTIMATE_OWNER_REJECTED';
    case EstimatePendingAcceptance = 'ESTIMATE_PENDING_ACCEPTANCE';
    case EstimatePendingApproval = 'ESTIMATE_PENDING_APPROVAL';
    case EstimateSubmitted = 'ESTIMATE_SUBMITTED';
    case EstimateVendorRejected = 'ESTIMATE_VENDOR_REJECTED';
}
