<?php
require '../vendor/autoload.php';
use Styde\User;

/* $user = new User([
   'first_name' => 'Jose',
   'last_name'  => 'Cantos',
]); */
$user = new User([
    'full_name' => 'Jose Cantos'
]);
//$user = new User();
//$user->fullName = 'Jose Cantos';
echo "<p>Bienvenido {$user->full_name}</p>";


