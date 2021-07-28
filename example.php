<?php

require_once "./vendor/autoload.php";

use \User\DigitalCep\Search;

$search = new Search;

$result = $search->getAddressFromZipCode('17406514');

print_r($result);