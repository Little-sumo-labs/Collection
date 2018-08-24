<?php

ini_set('display_errors', 1); // Afficher les erreurs à l'écran
error_reporting(E_ALL); // Afficher les erreurs et les avertissements

// Insertion des classes PHP
require 'vendor/autoload.php';

use App\Collection as collection;

$notes = [
    ['name' => 'Jean', 'note' => 20, 'nickname' => 'test'],
    ['name' => 'Marc', 'note' => 13, 'nickname' => 'test2'],
    ['name' => 'Emilie', 'note' => 15, 'nickname' => 'test3']
];

$collection = new collection($notes);
var_dump(
    $collection->get('0.name'),
    $collection->get('1')->get('name'),
    $collection->get('2.azename')
);

var_dump(
    $collection->lists('name', 'note'),
    $collection->extract('note')
);

var_dump(
    $collection->extract('note')->join(', ')
);

var_dump(
    $collection->extract('note')->max(),
    $collection->max('note')
);

var_dump(
    $collection->extract('note')->min(),
    $collection->min('note')
);