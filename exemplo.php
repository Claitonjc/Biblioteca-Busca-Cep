<?php

require_once "vendor/autoload.php";

use Clait\DigitalCep\Search;

$busca = new Search;

$resultado = $busca->getAdressFromZipCode('88900155');

print_r($resultado);