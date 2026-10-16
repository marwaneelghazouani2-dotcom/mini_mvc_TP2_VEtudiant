<?php

define('ROOT', str_replace('index.php', '', $_SERVER['SCRIPT_FILENAME']));
require_once ROOT . 'Traitement/Visiteur.php';
require_once (ROOT . 'BD/Visiteur.php');

$url = explode('/', $_GET['url'] ?? '');

if ($url[0] == '') {
    header('Location: Visiteur/all');
    exit;
} elseif ($url[0] == 'Visiteur' && isset($url[1])) {
    $action = $url[1];
    $ID = $url[2] ?? null;

    if ($action == 'all') {
        selectall();
    } elseif ($action == 'one') {
        afficher($ID);
    } elseif ($action == 'add') {
        ajouter();
    } elseif ($action == 'update') {
        modifier($ID);
    } elseif ($action == 'delete') {
        supprimer($ID);
    } else {
        include_once ROOT . 'IHM/404.php';
    }
} else {
    include_once ROOT . 'IHM/404.php';
}
