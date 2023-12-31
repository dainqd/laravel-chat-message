<?php declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

final class UserMessageStatus extends Enum
{
    const ONLINE = 'ONLINE ';
    const OFFLINE = 'OFFLINE';
}
