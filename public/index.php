<?php

require __DIR__ . "/../vendor/autoload.php";

//Rooting
$uri = $_SERVER['REQUEST_URI'];

//Rendu
$loader = new \Twig\Loader\FilesystemLoader(__DIR__.'/../templates');
$twig = new \Twig\Environment($loader, [
    'cache' => false,
    'debug' => true
]);
$twig->addExtension(new \Twig\Extension\DebugExtension());

if ($uri === '/'){
    echo $twig->render('home.html.twig');
}elseif ($uri === '/about'){
    echo $twig->render('about.html.twig');
}elseif ($uri === '/work'){
    echo $twig->render('work.html.twig');
}elseif ($uri === '/contact'){
    echo $twig->render('contact.html.twig');
}