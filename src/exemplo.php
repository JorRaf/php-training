<?php

require_once "vendor/autoload.php";

use \Jorraf\BuscaCep\Search;

$busca = new Search;

$resultado = $busca->getAdreddFromZipcode('66814410');

print_r($resultado);