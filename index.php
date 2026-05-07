<?php

require_once "bootstrap/bostrap.php";

$filesName = [
    'diferenciais.php',
    'frequent-questions.php',
    'testimonies.php',
    'renowned-clients.php',
    'location.php',
    'support.php',

];

require_once "inc/layouts/header.php";

foreach ($filesName as $file) {
    if (file_exists(inc_path($file))) {
        include_once inc_path($file);
    }
}

require_once "inc/layouts/footer.php";


