<?php

declare(strict_types=1);

require_once '../vendor/autoload.php';
require_once '../src/Html/WebPage.php';
use Database\MyPdo;
use Entity\Movie;
use Entity\People;
use Html\WebPage;

$webpage = new WebPage("index");
$webpage->appendCssUrl('css/styleIndex.css');
$webpage->appendContent("<div class='header'><h1>Films</h1></div>");

$webpage->appendContent("<div class='menus'>");
$webpage->appendContent("<details>");
$webpage->appendContent("<summary>Menu</summary>");
$webpage->appendContent("<div class=menu>");
$webpage->appendContent("<div class='title'>Table des matières</div>");
$webpage->appendContent("<ul>");
$webpage->appendContent("<li class='menu_item'>");
$webpage->appendContent("<a >Supprimer un film</a>");
$webpage->appendContent("</li>");
$webpage->appendContent("<li class='menu_item'>");
$webpage->appendContent("<a >Ajouter un film</a>");
$webpage->appendContent("</li>");
$webpage->appendContent("<li class='menu_item'>");
$webpage->appendContent("<a >Modifier un film</a>");
$webpage->appendContent("</li>");
$webpage->appendContent("</ul>");
$webpage->appendContent("</div>");
$webpage->appendContent("</details>");
$webpage->appendContent("</div>");

$stmt = MyPDO::getInstance()->prepare(
    <<<'SQL'
        SELECT m.id,title, jpeg
        FROM movie m 
            join image i on (m.posterId = i.id)
        ORDER BY title;
        SQL
    );

$stmt2 = MyPDO::getInstance()->prepare(
    <<<'SQL'
        SELECT m.id, jpeg
        FROM movie m 
            join image i on (m.posterId = i.id)
        where m.id = ':id';
        SQL
);

while (($ligne = $stmt2->fetch()) !== false) {
    $stmt2->bindValue(':id', $ligne['id']);
    $stmt2->execute();
}
$webpage->appendContent("<div class='content'>");
$stmt->execute();
$webpage->appendContent("<div class='link'>");
while (($ligne = $stmt->fetch()) !== false) {
    $webpage->appendContent("<a href='http://localhost:8000/film.php?id={$ligne['id']}'>");
    if (($stmt2) != null)
        $webpage->appendContent('<img src="data:image/jpeg;base64,'.base64_encode( $ligne['jpeg'] ).'"/>');
    else{
        header('Content-Type: image/png');
        $webpage->appendContent('<img src="image/movie.png" alt="kk"/>');
        }
    $webpage->appendContent("<p>{$ligne['title']} </p>");
    $webpage->appendContent("</a>");
}
$webpage->appendContent("</div>");
$webpage->appendContent("</div>");
$webpage->appendContent("<div class='footer'><p>{$webpage->getLastModification()}</p></div>");
echo $webpage->toHTML();

