<?php
declare(strict_types=1);

namespace Entity;

class Genre
{
    private int $id;
    private String $name;

    /**
     * Permet d'affecter des valeurs à chaques attributs de la classe Genre
     * @param int $id
     * @param String $name
     */
    public function __construct(int $id, String $name)
    {
        $this->id=$id;
        $this->name=$name;
    }

    /**
     * Renvoie l'id du genre
     * @return int L'id du genre
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Permet d'affecter une valeur à id
     * @param int $id L'id du genre
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * Renvoie le nom du genre
     * @return String Le nom du genre
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Permet d'affecter une valeur à name
     * @param String $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }
}