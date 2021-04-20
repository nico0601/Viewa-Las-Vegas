<?php

namespace Nico\ViewaLasVegas;

//enable autoloading via namespaces
require_once './vendor/autoload.php';


// initiate TWIG
$loader = new \Twig\Loader\FilesystemLoader('./Templates');
$twig = new \Twig\Environment($loader);


// Liste der Kühlschräke aus PHP
$hotels = array(
    new \LasVegas("Bellagio", "3", "2", "5", "./pics/bellagio.webp"),
    new \LasVegas("The Venetian", "4", "3", "6", "./pics/venetian.jpg"),
    new \LasVegas("Caesars Palace", "10", "8", "11", "./pics/caesars.jpg")
);


echo $twig->render
('index.html',
    ['hotels' => $hotels]
);


/**
 * @param $path
 * @return false|string
 */
function readTemplateFile(string $path): string
{
    $handle = fopen($path, "r");
    $contents = fread($handle, filesize($path));
    fclose($handle);
    return $contents;
}

