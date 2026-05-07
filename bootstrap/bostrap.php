<?php

require_once "vendor/autoload.php";

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

$testimonies = testimony()->getResources(); 
$questions = questions()->getResources();