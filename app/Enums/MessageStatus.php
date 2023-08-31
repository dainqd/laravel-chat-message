<?php declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

final class MessageStatus extends Enum
{
    const SEEN = 'SEEN';
    const UNSEEN = 'UNSEEN';
    const SENT = 'SENT';
    const HIDDEN = 'HIDDEN';
    const DELETED = 'DELETED';
}
