<?php

require_once "vendor/autoload.php";

use Clait\DigitalCep\Search;
use Clait\DigitalCep\Searchers\SearchBrasilApiCep;
use Clait\DigitalCep\Searchers\SearchOpenCep;
use Clait\DigitalCep\Searchers\SearchViaCep;

$viaCepSearch = new SearchViaCep;
$search = new Search($viaCepSearch);

$resultViaCep = $search->getAdressFromZipCode('88900155');

print_r($resultViaCep);

$brasilApiCepSearch = new SearchBrasilApiCep;
$searchBrasilApi = new Search($brasilApiCepSearch);

$resultBrasil = $searchBrasilApi->getAdressFromZipCode('88900126');

print_r($resultBrasil);


$openCepSerach = new SearchOpenCep;
$searchOpenCep = new Search($openCepSerach);

$resultOpen = $searchOpenCep->getAdressFromZipCode('88900000');

print_r($resultOpen);