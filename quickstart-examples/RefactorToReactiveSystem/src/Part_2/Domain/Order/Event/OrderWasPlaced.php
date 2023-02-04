<?php

declare(strict_types=1);

namespace App\ReactiveSystem\Part_2\Domain\Order\Event;

use Ramsey\Uuid\UuidInterface;

final class OrderWasPlaced
{
    public function __construct(
        public readonly UuidInterface $orderId
    ) {}
}