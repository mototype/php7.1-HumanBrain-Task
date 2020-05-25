<?php

declare(strict_types=1);

namespace App;

class Brain implements BrainInterface
{
    private $memories;

    public function __construct()
    {
        $this->memories = [];
    }

    public function remember($what): bool
    {
        $this->memories[] = $what;
        return true;
    }

    public function forget($what): bool
    {
        $this->memories = array_filter($this->memories, function ($value) use ($what) {
            return $value !== $what;
        });
        return true;
    }

    public function getMemories(): array
    {
        return $this->memories;
    }
}
