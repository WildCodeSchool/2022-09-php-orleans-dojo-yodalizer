<?php

require __DIR__ . '/../vendor/autoload.php';

use App\Yoda;

$yoda = new Yoda();

if ($yoda->translate('Je suis ton père.') === 'Père ton suis je.') {
    echo 'OK';
} else {
    echo 'NON';
}

if ($yoda->translate('Je suis, ton père.') === 'Père ton suis, je.') {
    echo 'OK';
} else {
    echo 'NON';
}

if ($yoda->translate('Tu me dois 10 crédits.') === 'Crédits 10 dois me tu.') {
    echo 'OK';
} else {
    echo 'NON';
}

if ($yoda->translate('Yoda.') === 'Yoda.') {
    echo 'OK';
} else {
    echo 'NON';
}

if ($yoda->translate('') === '') {
    echo 'OK';
} else {
    echo 'NON';
}
