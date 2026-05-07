<?php

use Qostel\Qos\Database\Database;
use Qostel\Qos\Entitys\FrequentQuestion;
use Qostel\Qos\Entitys\Testimony;

function testimony(): Database
{
    return new Testimony;
}

function questions(): Database
{
    return new FrequentQuestion;
}