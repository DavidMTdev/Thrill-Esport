<?php require_once("function.php") ?>

<!doctype html>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php if ($_SERVER["SCRIPT_NAME"] == "/index.php") : ?>
        <meta name="description" content="Thrill eSport Club est une structure esportive sous loi 1901, sur les jeux : FIFA, COD, FORTNITE.." />
        <meta property="og:locale" content="fr_FR" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="Thrill Esport Club" />
        <meta property="og:description" content="Thrill eSport Club est une structure esportive sous loi 1901, sur les jeux : FIFA, COD, FORTNITE.." />
        <meta property="og:url" content="https://thrillesportclub.fr/" />
        <meta property="og:site_name" content="Thrill Esport Club" />
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:description" content="Thrill eSport Club est une structure esportive sous loi 1901, sur les jeux : FIFA, COD, FORTNITE.." />
        <meta name="twitter:title" content="Thrill Esport Club" />
        <meta name="twitter:site" content="@Thrill_EC" />
        <meta name="twitter:creator" content="@Thrill_EC" />
    <?php endif; ?>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/asset/css/style.css">

    <?php if ($_SERVER["SCRIPT_NAME"] == "/index.php") : ?>
        <link rel="stylesheet" href="/asset/css/home.css">
        <title>Accueil - Thrill eSport Club</title>
    <?php elseif ($_SERVER["SCRIPT_NAME"] == "/about.php") : ?>
        <link rel="stylesheet" href="/asset/css/about.css">
        <title>Club - Thrill eSport Club</title>
    <?php elseif ($_SERVER["SCRIPT_NAME"] == "/team/fortnite/index.php" || $_SERVER["SCRIPT_NAME"] == "/team/callofduty/index.php" || $_SERVER["SCRIPT_NAME"] == "/team/fifa/index.php") : ?>
        <link rel="stylesheet" href="/asset/css/team.css">
        <title>Équipes - Thrill eSport Club</title>
    <?php elseif ($_SERVER["SCRIPT_NAME"] == "/dev/development.php") : ?>
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