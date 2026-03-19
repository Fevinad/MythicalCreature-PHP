<?php

declare(strict_types=1);

namespace MythicalCreatures;

class Stark
{
    private string $name;
    private string $location;
    private bool $safe = false;

    public function __construct(string $name, string $location = 'Winterfell')
    {
        $this->name = $name;
        $this->location = $location;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getLocation(): string
    {
        return $this->location;
    }

    public function isSafe(): bool
    {
        return $this->safe;
    }

    public function setSafe(bool $safe): void
    {
        $this->safe = $safe;
    }

    public function getHouseWords(): string
    {
        return 'Winter is Coming';
    }
}