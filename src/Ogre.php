<?php

declare(strict_types=1);

namespace MythicalCreatures;

class Ogre
{
    private string $name;
    private string $home;
    private int $swings = 0;

    public function __construct(string $name, string $home = 'Swamp')
    {
        $this->name = $name;
        $this->home = $home;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getHome(): string
    {
        return $this->home;
    }

    public function getSwings(): int
    {
        return $this->swings;
    }

    public function encounter(Human $human): void
    {
        $human->increaseEncounterCounter();
        
        // ici si humain detecter coup de massue sur lui
        if ($human->noticesOgre()) {
            $this->swingAt($human);
        }
    }

    public function swingAt(Human $human): void
    {
        $this->swings++;
        
        // ici on assomme l'humain mais 1 fois sur 2 en gros
        if ($this->swings % 2 === 0) {
            $human->setKnockedOut(true);
        }
    }

    public function apologize(Human $human): void
    {
        // L'Ogre pardonne et l'humain se reveille
        $human->setKnockedOut(false);
    }
}