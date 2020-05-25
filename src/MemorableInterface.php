<?php

declare(strict_types=1);

namespace App;

interface MemorableInterface
{
    public function remember($what);
    public function forget($what);
    public function getMemories(): array;
}