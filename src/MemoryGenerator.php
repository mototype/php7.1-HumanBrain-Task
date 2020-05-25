<?php

declare(strict_types=1);

namespace App;

class MemoryGenerator
{
    private $numberOfElements;
    private $evenWords;
    private $evenWordsCheck;
    private $oddMin;
    private $oddMax;
    private $oddCheck;
    private $oddNumberOfElements;
    private $evenWordsSeparator;

    public function __construct(
        int $numberOfElements,
        array $evenWords,
        string $evenWordsCheck,
        int $oddMin,
        int $oddMax,
        int $oddCheck,
        int $oddNumberOfElements,
        string $evenWordsSeparator
    ) {
        $this->numberOfElements = $numberOfElements;
        $this->evenWords = $evenWords;
        $this->evenWordsCheck = $evenWordsCheck;
        $this->oddMin = $oddMin;
        $this->oddMax = $oddMax;
        $this->oddCheck = $oddCheck;
        $this->oddNumberOfElements = $oddNumberOfElements;
        $this->evenWordsSeparator = $evenWordsSeparator;
    }

    public function generate()
    {
        for ($i = 0; $i < $this->numberOfElements; $i++) {
            if ($i % 2 === 0) {
                $array[$i] = $this->evenWords[rand(0, count($this->evenWords) - 1)];
            } else {
                $array[$i] = [];
                for ($j = 0; $j < $this->oddNumberOfElements; $j++) {
                    $array[$i][$j] = rand($this->oddMin, $this->oddMax);
                }
            }
        }
        
        $output = [];
        
        for ($i = 0; $i < $this->numberOfElements; $i++) {
            if (is_string($array[$i])) {
                $tokenizedString = array_map(function ($value) {
                    return trim($value);
                }, explode(',', $array[$i]));
        
                if (array_search($this->evenWordsCheck, $tokenizedString) !== false) {
                    $output[] = implode($this->evenWordsSeparator, $tokenizedString);
                }
            } else {
                $sum = array_sum($array[$i]);
                if ($sum > $this->oddCheck) {
                    $output[] = $sum;
                }
            }
        }
        
        return $output;
    }
}
