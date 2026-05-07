<?php

require_once "bootstrap/bostrap.php";

require_once "inc/layouts/header.php";

if (file_exists('inc/diferenciais.php')) {
    include "inc/diferenciais.php";
}

if (file_exists('inc/frequent-questions.php')) {
    include "inc/frequent-questions.php";
}

if (file_exists('inc/renowned-clients.php')) {
    include "inc/renowned-clients.php";
}

if (file_exists('inc/testimonies.php')) {
    require_once "inc/testimonies.php";
}

require_once "inc/layouts/footer.php";


