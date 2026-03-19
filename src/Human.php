<?php

declare(strict_types=1);

namespace MythicalCreatures;

class Human
{
    private string $name;
    private int $encounterCounter = 0;
    private bool $knockedOut = false;

    public function __construct(string $name = 'Jane')
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getEncounterCounter(): int
    {
        return $this->encounterCounter;
    }

    public function increaseEncounterCounter(): void
    {
        $this->encounterCounter++;
    }

    public function noticesOgre(): bool
    {
        // Remarque l'Ogre toutes les 3 rencontres
        return $this->encounterCounter > 0 && $this->encounterCounter % 3 === 0;
    }

    public function isKnockedOut(): bool
    {
        return $this->knockedOut;
    }

    public function setKnockedOut(bool $status): void
    {
        $this->knockedOut = $status;
    }
}