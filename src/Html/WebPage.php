<?php

namespace Html;

class WebPage
{
    private string $head;
    private string $title;
    private string $body;

    /**
     * Constructeur de la classe WebPage.
     * @param string $title
     */
    public function __construct(string $title = "")
    {
        $this->title = $title;
        $this->head = "";
        $this->body = "";
    }

    /**
     * Retourne la valeur de head.
     * @return string
     */
    public function getHead(): string
    {
        return $this->head;
    }

    /**
     * Retourn la valeur de title.
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Affecte la valeur $title à la valeur title de la classe.
     * @param string $title
     * @return void
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * Retourne la valeur de body
     * @return string
     */
    public function getBody(): string
    {
        return $this->body;
    }

    /**
     * Ajouter un contenu dans $this->head.
     * @param string $content
     * @return void
     */
    public function appendToHead(string $content): void
    {
        $this->head .= $content;
    }

    /**
     * Ajouter un contenu CSS dans $this->head.
     * @param string $css
     * @return void
     */
    public function appendCss(string $css): void
    {
        $this->head .= <<<HTML
<style>
    $css
</style>
HTML;
    }

    /**
     * Ajouter l'URL d'un script CSS dans $this->head.
     * @param string $url
     * @return void
     */
    public function appendCssUrl(string $url): void
    {
        $this->head .= <<<HTML
<link href="$url" rel="stylesheet" type="text/css">
HTML;

    }

    /**
     * Ajouter un contenu JavaScript dans $this->head.
     * @param string $js
     * @return void
     */
    public function appendJs(string $js): void
    {
        $this->head .= <<<HTML
<script>
    $js
</script>
HTML;
    }

    /**
     * Ajouter l'URL d'un script JavaScript dans $this->head.
     * @param string $url
     * @return void
     */
    public function appendJsUrl(string $url): void
    {
        $this->head .= <<<HTML
<script src="$url"></script>
HTML;
    }

    /**
     * Ajouter un contenu dans $this->body.
     * @param string $content
     * @return void
     */
    public function appendContent(string $content): void
    {
        $this->body .= $content;
    }

    /**
     * Produire la page Web complète.
     * @return string
     */
    public function toHTML(): string
    {
        return <<<HTML
<!DOCTYPE HTML>
<html lang = "fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        $this->head
        <title>
            $this->title
        </title>
    </head>
    <body>
        $this->body
    </body>
</html>
HTML;
    }

    /**
     * Protéger les caractères spéciaux pouvant dégrader la page Web.
     * @param string $string
     * @return string
     */
    public function escapeString(string $string): string
    {
        return htmlspecialchars($string, ENT_QUOTES | ENT_HTML5);
    }

    /**
     * Donner la date et l'heure de la dernière modification du script principal.
     * @return string
     */
    public static function getLastModification(): string
    {
        return date("F d Y H:i:s", getlastmod());
    }
}
