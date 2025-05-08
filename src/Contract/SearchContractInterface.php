<?php

namespace Clait\DigitalCep\Contract;

interface SearchContractInterface {
    public function getAdressFromZipCode(string $zipCode):array;
}