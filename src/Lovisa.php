<?php

declare(strict_types=1);

namespace MythicalCreatures;

class Lovisa
{
    private string $title;
    private array $characteristics;

    public function __construct(string $title, array $characteristics = ['brilliant'])
    {
        $this->title = $title;
        $this->characteristics = $characteristics;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getCharacteristics(): array
    {
        return $this->characteristics;
    }

    public function isBrilliant(): bool
    {
        return in_array('brilliant', $this->characteristics);
    }

    public function isKind(): bool
    {
        return in_array('kind', $this->characteristics);
    }

    public function say(string $text): string
    {
        return '**;* ' . $text . ' **;*';
    }
}