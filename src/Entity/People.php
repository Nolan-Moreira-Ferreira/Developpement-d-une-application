<?php
declare(strict_types=1);

namespace Entity;

class People
{
    private int $id;
    private String $placeOfBirth;
    private String $biography;
    private String $name;
    private int $avatarId;
    private String $deathday;
    private String $birthday;

    /**
     * Permet d'affecter des valeurs à chaques attributs de la classe Movie
     * @param int $id
     * @param String $placeOfBirth
     * @param String $biography
     * @param String $name
     * @param int $avatarId
     * @param String $deathday
     * @param String $birthday
     */
    public function __construct(int $id,String $placeOfBirth=null,String $biography=null,String $name,int $avatarId=null,
                                String $deathday=null,String $birthday=null)
    {
        $this->id=$id;
        $this->placeOfBirth=$placeOfBirth;
        $this->biography=$biography;
        $this->name=$name;
        $this->deathday=$deathday;
        $this->birthday=$birthday;
        $this->avatarId=$avatarId;
    }

    /**
     * Renvoie l'id de la personne
     * @return int L'id de la personne
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Renvoie le lieu de naissance de la personne
     * @return String Le lieu de naissance de la personne
     */
    public function getPlaceOfBirth(): string
    {
        return $this->placeOfBirth;
    }

    /**
     * Renvoie la biographie de la personne
     * @return String La biographie de la personne
     */
    public function getBiography(): string
    {
        return $this->biography;
    }

    /**
     * Renvoie le nom de la personne
     * @return String Le nom de la personne
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Renvoie l'id de l'avatar de la personne
     * @return int L'id de l'avatar de la personne
     */
    public function getAvatarId(): int
    {
        return $this->avatarId;
    }

    /**
     * Renvoie le jour de mort de la personne
     * @return String Le jour de mort de la personne
     */
    public function getDeathday(): string
    {
        return $this->deathday;
    }

    /**
     * Renvoie le jour de naissance de la personne
     * @return String Le jour de naissance de la personne
     */
    public function getBirthday(): string
    {
        return $this->birthday;
    }

    /**
     * Permet d'affecter une valeur à id
     * @param int $id L'id de la personne
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * Permet d'affecter une valeur à placeOfBirth
     * @param String $placeOfBirth Le lieu de naissance de la personne
     */
    public function setPlaceOfBirth(string $placeOfBirth): void
    {
        $this->placeOfBirth = $placeOfBirth;
    }

    /**
     * Permet d'affecter une valeur à biography
     * @param String $biography La biographie de la personne
     */
    public function setBiography(string $biography): void
    {
        $this->biography = $biography;
    }

    /**
     * Permet d'affecter une valeur à name
     * @param String $name Le nom de la personne
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * Permet d'affecter une valeur à avatarId
     * @param int $avatarId L'id de l'avatar de la personne
     */
    public function setAvatarId(int $avatarId): void
    {
        $this->avatarId = $avatarId;
    }

    /**
     * Permet d'affecter une valeur à deathday
     * @param String $deathday Le jour de mort de la personne
     */
    public function setDeathday(string $deathday): void
    {
        $this->deathday = $deathday;
    }

    /**
     * Permet d'affecter une valeur à birthday
     * @param String $birthday Le jour de naissance de la personne
     */
    public function setBirthday(string $birthday): void
    {
        $this->birthday = $birthday;
    }

}