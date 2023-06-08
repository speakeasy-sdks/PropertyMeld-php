<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace PropertyMeld\MeldAPI\Models\Operations;


enum ExpenditureListStatus: string
{
    case APPROVED = 'APPROVED';
    case BILLED = 'BILLED';
    case DRAFT = 'DRAFT';
    case HOLD = 'HOLD';
    case IN_REVIEW = 'IN_REVIEW';
}
