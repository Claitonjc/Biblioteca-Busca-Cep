<?php

namespace Clait\DigitalCep;

use Clait\DigitalCep\Contract\SearchContractInterface;

class Search {
    private $search;

    public function __construct(SearchContractInterface $search)
    {
        $this->search = $search;       
    }

    public function getAdressFromZipCode(string $zipCode): array {
        return $this->search->getAdressFromZipCode($zipCode);
    }
}