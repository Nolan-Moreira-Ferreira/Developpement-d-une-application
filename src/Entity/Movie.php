<?php
declare(strict_types=1);

namespace Entity;

use Database\MyPdo;

class Movie
{
    private int $id;
    private String $title;
    private String $tagline;
    private int $runtime;
    private String $releaseDate;
    private String $overview;
    private String $originalTitle;
    private String $originalLanguage;
    private int $posterId;

    /**
     * Permet d'affecter des valeurs à chaques attributs de la classe Movie
     * @param int $id L'id du film
     * @param String $title Le titre du film
     * @param String $tagline Les tags du film
     * @param int $runtime La durée du film
     * @param String $releaseDate La date de sortie du film
     * @param String $overview Le résumé du film
     * @param String $originalTitle Le titre original du film
     * @param String $originalLanguage La langue d'origine du film
     * @param int $posterId L'id du poster du film
     */
    public function __construct(int $id=null,String $title,String $tagline=null,int $runtime,String $releaseDate,
                                String $overview,String $originalTitle,String $originalLanguage,int $posterId)
    {
        $this->id=$id;
        $this->title=$title;
        $this->tagline=$tagline;
        $this->runtime=$runtime;
        $this->releaseDate=$releaseDate;
        $this->overview=$overview;
        $this->originalTitle=$originalTitle;
        $this->originalLanguage=$originalLanguage;
        $this->posterId=$posterId;
    }

    public function getId(): int
    {
        return $this->id;
    }

    private function setId(?int $id): Movie
    {
        $this->id = $id;
        return $this;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): Movie
    {
        $this->title = $title;
        return $this;
    }

    public function getTagline(): string
    {
        return $this->tagline;
    }

    public function setTagline(string $tagline): Movie
    {
        $this->tagline = $tagline;
        return $this;
    }

    public function getRuntime(): int
    {
        return $this->runtime;
    }

    public function setRuntime(int $runtime): Movie
    {
        $this->runtime = $runtime;
        return $this;
    }

    public function getReleaseDate(): string
    {
        return $this->releaseDate;
    }

    public function setReleaseDate(string $releaseDate): Movie
    {
        $this->releaseDate = $releaseDate;
        return $this;
    }

    public function getOverview(): string
    {
        return $this->overview;
    }

    public function setOverview(string $overview): Movie
    {
        $this->overview = $overview;
        return $this;
    }

    public function getOriginalTitle(): string
    {
        return $this->originalTitle;
    }

    public function setOriginalTitle(string $originalTitle): Movie
    {
        $this->originalTitle = $originalTitle;
        return $this;
    }

    public function getOriginalLanguage(): string
    {
        return $this->originalLanguage;
    }

    public function setOriginalLanguage(string $originalLanguage): Movie
    {
        $this->originalLanguage = $originalLanguage;
        return $this;
    }

    public function getPosterId(): int
    {
        return $this->posterId;
    }

    public function setPosterId(int $posterId): Movie
    {
        $this->posterId = $posterId;
        return $this;
    }

    public function delete() : Movie
    {
        $stmt=MyPDO::getInstance()->prepare(
            <<<'SQL'
                DELETE m.id
                FROM movie m
                WHERE m.id = :id;
        SQL);


        $stmt->bindValue(':id', $this->getId());
        $stmt->execute();

        $this->setId(null);

        return $this;
    }
}