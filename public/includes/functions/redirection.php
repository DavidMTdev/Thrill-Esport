<?php

if ($_SERVER["REQUEST_URI"] == "/index.php" || $_SERVER["REQUEST_URI"] == "/index") {
    header("location: /");
}

if ($_SERVER["REQUEST_URI"] == "/team/fortnite/index" || $_SERVER["REQUEST_URI"] == "/team/fortnite/index.php") {
    header("location: /team/fortnite/");
}
