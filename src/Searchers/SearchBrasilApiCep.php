<?php

namespace Clait\DigitalCep\Searchers;

use Clait\DigitalCep\Contract\SearchContractInterface;

class SearchBrasilApiCep implements SearchContractInterface {
    private $url = "https://brasilapi.com.br/api/cep/v1/";

    public function getAdressFromZipCode(string $zipCode): array {
        $zipCode = preg_replace('/[^0-9]/im', '', $zipCode);

        $get = file_get_contents($this->url . $zipCode);

        return (array) json_decode($get, true);
    }
}