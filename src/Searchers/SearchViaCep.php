<?php

namespace Clait\DigitalCep\Searchers;

use Clait\DigitalCep\Contract\SearchContractInterface;

class SearchViaCep implements SearchContractInterface {
    private $url = "https://viacep.com.br/ws/";

    public function getAdressFromZipCode(string $zipCode): array {
        $zipCode = preg_replace('/[^0-9]/im', '', $zipCode);

        $get = file_get_contents($this->url . $zipCode . "/json");

        return (array) json_decode($get, true);
    }
}