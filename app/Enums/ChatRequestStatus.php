<?php declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

final class ChatRequestStatus extends Enum
{
    const APPROVED =   'APPROVED';
    const PENDING =   'PENDING';
    const REFUSE = 'REFUSE';
    const DELETED = 'DELETED';
}
