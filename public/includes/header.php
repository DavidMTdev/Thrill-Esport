<?php require_once("function.php") ?>

<!doctype html>
<html lang="fr" xmlns:og="http://ogp.me/ns#">

<head>
    <!-- Required meta tags -->
    <meta charset=" utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php if ($_SERVER["SCRIPT_NAME"] == "/index.php") : ?>
        <meta name="description" content="Thrill eSport Club est une structure esportive sous loi 1901, sur les jeux : FIFA, COD, FORTNITE.." />
        <meta property="og:locale" content="fr_FR" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="Thrill Esport Club" />
        <meta property="og:description" content="Thrill eSport Club est une structure esportive sous loi 1901, sur les jeux : FIFA, COD, FORTNITE.." />
        <meta property="og:url" content="https://thrillesportclub.fr/" />
        <meta property="og:site_name" content="Thrill Esport Club" />
        <meta property="og:image" content="https://thrillesportclub.fr/asset/img/logo/v3/thrill-esport-logo.png" />
    <?php endif; ?>
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:description" content="Thrill eSport Club est une structure esportive sous loi 1901, sur les jeux : FIFA, COD, FORTNITE.." />
    <meta name="twitter:title" content="Thrill Esport Club" />
    <meta name="twitter:site" content="@Thrill_EC" />
    <meta name="twitter:creator" content="@Thrill_EC" />

    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="/asset/img/favicon/favicon.png" type="image/png">
    <link rel="icon" sizes="32x32" href="/asset/img/favicon/favicon-32.png" type="image/png">
    <link rel="icon" sizes="64x64" href="/asset/img/favicon/favicon-64.png" type="image/png">
    <link rel="icon" sizes="96x96" href="/asset/img/favicon/favicon-96.png" type="image/png">
    <link rel="icon" sizes="196x196" href="/asset/img/favicon/favicon-196.png" type="image/png">
    <link rel="apple-touch-icon" sizes="152x152" href="/asset/img/favicon/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/asset/img/favicon/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/asset/img/favicon/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/asset/img/favicon/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/asset/img/favicon/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/asset/img/favicon/apple-touch-icon-144x144.png">
    <meta name="msapplication-TileImage" content="/asset/img/favicon/favicon-144.png">
    <meta name="msapplication-TileColor" content="#FFFFFF">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/asset/css/style.css">

    <?php if ($_SERVER["SCRIPT_NAME"] == "/index.php") : ?>
        <link rel="stylesheet" href="/asset/css/home.css">
        <title>Accueil - Thrill eSport Club</title>
    <?php elseif ($_SERVER["SCRIPT_NAME"] == "/about.php") : ?>
        <link rel="stylesheet" href="/asset/css/about.css">
        <title>Club - Thrill eSport Club</title>
    <?php elseif ($_SERVER["SCRIPT_NAME"] == "/team/fortnite/index.php" || $_SERVER["SCRIPT_NAME"] == "/team/callofduty/index.php" || $_SERVER["SCRIPT_NAME"] == "/team/fifa/index.php" || $_SERVER["SCRIPT_NAME"] == "/team/rocketleague/index.php") : ?>
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