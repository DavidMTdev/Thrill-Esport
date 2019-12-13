<?php require_once("function.php") ?>

<!doctype html>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/asset/css/style.css">

    <?php if ($_SERVER["REQUEST_URI"] === "/") : ?>
        <link rel="stylesheet" href="/asset/css/home.css">
        <title>Thrill Esport Club</title>
    <?php elseif ($_SERVER["REQUEST_URI"] === "/about") : ?>
        <link rel="stylesheet" href="/asset/css/about.css">
        <title>La Présentation De La Structure</title>
    <?php elseif ($_SERVER["REQUEST_URI"] === "/team/fortnite") : ?>
        <link rel="stylesheet" href="/asset/css/team.css">
        <title>Nos Equipe</title>

    <?php elseif ($_SERVER["REQUEST_URI"] === "/dev/development") : ?>
        <link rel="stylesheet" href="/asset/css/development.css">
        <title>En Développement</title>
    <?php endif; ?>

</head>

<body>

    <header>
        <?php require_once("nav.php") ?>
    </header>
    <main>

        <!-- /* --------------------------------- logger --------------------------------- */ -->
        <!-- <?= var_dump($_SERVER) ?> -->