<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace PropertyMeld\MeldAPI\Models\Operations;


/** reminder_choice */
enum MeldListReminderChoice: string
{
    case Overdue = 'overdue';
    case Today = 'today';
    case Tomorrow = 'tomorrow';
    case Week = 'week';
}
