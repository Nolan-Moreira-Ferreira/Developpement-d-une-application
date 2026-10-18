<?php
declare(strict_types=1);

namespace Entity;

class Cast
{
    private int $id;
    private int $orderIndex;
    private String $role;
    private int $peopleId;
    private int $movieId;

    /**
     * Permet d'affecter des valeurs à chaques attributs de la classe Cast
     * @param int $id
     * @param int $orderIndex
     * @param String $role
     * @param int $peopleId
     * @param int $movieId
     */
    public function __construct(int $id,int $orderIndex,String $role=null,int $peopleId,int $movieId){
        $this->id=$id;
        $this->movieId=$movieId;
        $this->orderIndex=$orderIndex;
        $this->role=$role;
        $this->peopleId=$peopleId;
    }

    /**
     * Renvoie l'id d'un cast
     * @return int L'id d'un cast
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Renvoie l'ordre d'index d'un cast
     * @return int L'ordre d'index d'un cast
     */
    public function getOrderIndex(): int
    {
        return $this->orderIndex;
    }

    /**
     * Renvoie le rôle d'un cast
     * @return String Le rôle d'un cast
     */
    public function getRole(): string
    {
        return $this->role;
    }

    /**
     * Renvoie l'id de personne d'un cast
     * @return int L'id de personne d'un cast
     */
    public function getPeopleId(): int
    {
        return $this->peopleId;
    }

    /**
     * Renvoie l'id du film d'un cast
     * @return int L'id du film d'un cast
     */
    public function getMovieId(): int
    {
        return $this->movieId;
    }

    /**
     * Permet d'affecter une valeur à id
     * @param int $id L'id d'un cast
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * Permet d'affecter une valeur à orderIndex
     * @param int $orderIndex L'ordre d'index d'un cast
     */
    public function setOrderIndex(int $orderIndex): void
    {
        $this->orderIndex = $orderIndex;
    }

    /**
     * Permet d'affecter une valeur à role
     * @param String $role Le rôle d'un cast
     */
    public function setRole(string $role): void
    {
        $this->role = $role;
    }

    /**
     * Permet d'affecter une valeur à peopleId
     * @param int $peopleId L'id de personne d'un cast
     */
    public function setPeopleId(int $peopleId): void
    {
        $this->peopleId = $peopleId;
    }

    /**
     * Permet d'affecter une valeur à movieId
     * @param int $movieId L'id du film d'un cast
     */
    public function setMovieId(int $movieId): void
    {
        $this->movieId = $movieId;
    }
}