<?php

declare(strict_types=1);

namespace App;

class Human implements HumanInterface
{
    private $brain;

    public function __construct(BrainInterface $brain)
    {
        $this->brain = $brain;
    }

    public function remember($what): bool
    {
        return $this->brain->remember($what);
    }

    public function forget($what): bool
    {
        return $this->brain->forget($what);
    }

    public function getMemories(): array
    {
        return $this->brain->getMemories();
    }

    public function speak(): void
    {
        foreach ($this->brain->getMemories() as $memory) {
            echo $memory . "\n";
        }
    }

    public function think($ofWhat)
    {
        if (!is_string($ofWhat) && !is_int($ofWhat)) {
            echo 'Don\'t know about this.' . PHP_EOL;
            return false;
        }
        if (is_string($ofWhat)) {
            $type = 'string';
        } elseif (is_int($ofWhat)) {
            $type = 'integer';
        }

        $out = (array_search($ofWhat, $this->getMemories()) !== false) ? "I know about the %s %s\n" : "I dont know about the %s %s\n";
        
        echo sprintf($out, $type, $ofWhat);

        return true;
    }
}