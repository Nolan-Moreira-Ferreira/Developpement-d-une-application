<?php
declare(strict_types=1);

namespace Entity;

class Movie_genre
{
    private int $movieId;
    private int $genreId;

    /**
     * Permet d'affecter des valeurs à chaques attributs de la classe Movie_genre
     * @param int $movieId L'id du film
     * @param int $genreId L'id du genre
     */
    public function __construct(int $movieId,int $genreId)
    {
        $this->movieId=$movieId;
        $this->genreId=$genreId;
    }

    /**
     * Renvoie l'id du film
     * @return int L'id du film
     */
    public function getMovieId(): int
    {
        return $this->movieId;
    }

    /**
     * Permet d'affecter une valeur à movieId
     * @param int $movieId L'id du film
     */
    public function setMovieId(int $movieId): void
    {
        $this->movieId = $movieId;
    }

    /**
     * Renvoie l'id du genre
     * @return int L'id du genre
     */
    public function getGenreId(): int
    {
        return $this->genreId;
    }

    /**
     * Permet d'affecter une valeur à genreId
     * @param int $genreId L'id du genre
     */
    public function setGenreId(int $genreId): void
    {
        $this->genreId = $genreId;
    }
}