<?php

declare(strict_types=1);

require_once '../src/Html/WebPage.php';
use Database\MyPdo;
use Entity\Movie;
use Entity\People;
use Html\WebPage;

$webpage = new WebPage("index");

$webpage->appendContent("<div class='header'><h1>Films-Nom acteur</h1></div>");

$stmt = MyPDO::getInstance()->prepare(
    <<<'SQL'
        SELECT m.id, title, jpeg
        FROM movie m 
            join image i on (m.posterId = i.id)
        ORDER BY title;
        SQL
);

$webpage->appendContent("<div class='content'>");
$stmt->execute();
$webpage->appendContent("<div class='link'>");
while (($ligne = $stmt->fetch()) !== false) {
    $webpage->appendContent("<a href='http://localhost:8000/film.php?id='{$ligne['id']}>");
    $webpage->appendContent('<img src="data:image/jpeg;base64,'.base64_encode( $ligne['jpeg'] ).'"/>');
    $webpage->appendContent("<p>{$ligne['title']} </p>");
    $webpage->appendContent("</a>");
}
$webpage->appendContent("</div>");
$webpage->appendContent("</div>");
$webpage->appendContent("<div class='footer'><p>{$webpage->getLastModification()}</p></div>");
echo $webpage->toHTML();