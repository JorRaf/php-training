<?php

namespace Jorraf\BuscaCep;

class Search{
    private String $url = "https://viacep.com.br/ws/";

    public function getAdreddFromZipcode(string $zipCode): array{
        $zipCode = preg_replace('/[^0-9]/im', '', $zipCode);
        $get = file_get_contents($this->url.'/' . $zipCode.'/json');

        return (array) json_decode($get);
    }
}