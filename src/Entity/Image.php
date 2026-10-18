<?php
declare(strict_types=1);

namespace Entity;

class Image
{
    private int $id;
    private String $jpeg;

    /**
     * Permet d'affecter des valeurs à chaques attributs de la classe Image
     * @param int $id L'id de l'image
     * @param String $jpeg L'image
     */
    public function __construct(int $id,String $jpeg){
        $this->id=$id;
        $this->jpeg=$jpeg;
    }

    /**
     * Renvoie l'image de la classe
     * @return String L'image de la classe
     */
    public function getJpeg(): string
    {
        return $this->jpeg;
    }

    /**
     * Renvoie l'id de la classe
     * @return int L'id de la classe
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Permet d'affecter une valeur à id
     * @param int $id L'id de la classe
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * Permet d'affecter une valeur à id
     * @param String $jpeg L'image de la classe
     */
    public function setJpeg(string $jpeg): void
    {
        $this->jpeg = $jpeg;
    }
}