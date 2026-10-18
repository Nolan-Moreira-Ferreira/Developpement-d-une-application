<?php
declare(strict_types=1);
require_once '../vendor/autoload.php';
require_once '../src/Html/WebPage.php';
use Database\MyPdo;
use Html\WebPage;

$stmt = MyPDO::getInstance()->prepare(
    <<<'SQL'
        SELECT title ,releaseDate, originalTitle, overview, tagline, jpeg
        FROM movie m
        JOIN image i ON (m.posterId = i.id)
        WHERE m.id = :movie;
SQL
);

$stmt->bindValue(':movie', $_GET['id']);

$stmt->execute();

while (($line = $stmt->fetch()) !== false) {
    $title = $line['title'];
    $date = $line['releaseDate'];
    $originalTitle = $line['originalTitle'];
    $tagline = $line['tagline'];
    $overview = $line['overview'];
    $webpage = new WebPage($title);
    $webpage->appendCssUrl('css/styleFilm.css');

    $webpage->appendContent("<div class='head'><h1>Films - $title</h1></div>");
    $webpage->appendContent("<div class='menus'>");
    $webpage->appendContent("<details>");
    $webpage->appendContent("<summary>Menu</summary>");
    $webpage->appendContent("<div class=menu>");
    $webpage->appendContent("<div class='title'>Table des matières</div>");
    $webpage->appendContent("<ul>");
    $webpage->appendContent("<li class='menu_item'>");
    $webpage->appendContent("<a href='index.php'>Acceuil</a>");
    $webpage->appendContent("</li>");

    $webpage->appendContent("</ul>");
    $webpage->appendContent("</div>");
    $webpage->appendContent("</details>");
    $webpage->appendContent("</div>");

    $webpage->appendContent("<div class='movie'>");
    $webpage->appendContent('<img src="data:image/jpeg;base64,' . base64_encode($line['jpeg']) . '"/>');
    $webpage->appendContent("<div class='top'>");
    $webpage->appendContent("<div class='title'>");
    $webpage->appendContent("<a>$title</a>");
    $webpage->appendContent("<a>$date</a>");
    $webpage->appendContent("</div>");
    $webpage->appendContent("<div class='date'>$originalTitle</div>");
    $webpage->appendContent("<div class='date'>$tagline</div>");
    $webpage->appendContent("<div class='date'>$overview</div>");
    $webpage->appendContent("</div>");
    $webpage->appendContent("</div>");
}

$actor = MyPdo::getInstance()->prepare(
    <<<'SQL'
        SELECT c.id, c.role, p.name, i.jpeg, c.peopleId
        FROM cast c
        JOIN people p on (c.peopleId = p.id)
        JOIN image i on (p.avatarId = i.id)
        WHERE c.movieId = :movie;
SQL
);

$actor->bindValue('movie', $_GET['id']);

$actor->execute();

$webpage->appendContent("<div class='actor'>");
while (($line = $actor->fetch()) !== false) {
    $webpage->appendContent("<a href='http://localhost:8000/actor.php?id={$line['peopleId']}'>");
    $webpage->appendContent('<img src="data:image/jpeg;base64,' . base64_encode($line['jpeg']) . '"/>');
    $webpage->appendContent("<div class='tab'>");
    $webpage->appendContent("<div class='role'>{$line['role']}</div>");
    $webpage->appendContent("<div class='nom'>{$line['name']}</div>");
    $webpage->appendContent("</div>");
    $webpage->appendContent("</a>");
}
$webpage->appendContent("</div>");

$webpage->appendContent("<div class='footer'><p>{$webpage->getLastModification()}</p></div>");

echo($webpage->toHTML());