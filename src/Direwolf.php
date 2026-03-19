<?php

declare(strict_types=1);

namespace MythicalCreatures;

class Direwolf
{
    private string $name;
    private string $home;
    private string $size;
    private array $starksToProtect = [];

    public function __construct(string $name, string $home = 'Beyond the Wall', string $size = 'Massive')
    {
        $this->name = $name;
        $this->home = $home;
        $this->size = $size;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getHome(): string
    {
        return $this->home;
    }

    public function getSize(): string
    {
        return $this->size;
    }

    public function getStarksToProtect(): array
    {
        return $this->starksToProtect;
    }

    public function protects(Stark $stark): void
    {
        // Vérifie si le lieu est le même ET si le loup protège moins de 2 personnes
        if ($this->home === $stark->getLocation() && count($this->starksToProtect) < 2) {
            $this->starksToProtect[] = $stark;
            $stark->setSafe(true);
        }
    }

    public function huntsWhiteWalkers(): bool
    {
        // Chasse uniquement s'il n'y a personne à protéger
        return empty($this->starksToProtect);
    }

    public function leaves(Stark $stark): Stark
    {
        foreach ($this->starksToProtect as $key => $protectedStark) {
            if ($protectedStark === $stark) {
                // Retire le Stark du tableau
                unset($this->starksToProtect[$key]);
                // Réindexe le tableau (pour éviter les trous dans les clés)
                $this->starksToProtect = array_values($this->starksToProtect);
                
                $stark->setSafe(false);
                break;
            }
        }
        
        return $stark;
    }
}