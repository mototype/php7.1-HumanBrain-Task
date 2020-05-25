<?php

declare(strict_types=1);

namespace App;

interface HumanInterface extends MemorableInterface
{
    public function __construct(BrainInterface $brain);
    public function speak(): void;
    public function think($ofWhat);
}
