<?php
require '../vendor/autoload.php';
use Styde\User;

/* $user = new User([
   'first_name' => 'Jose',
   'last_name'  => 'Cantos',
]); */
$user = new User([
    'first_name' => 'Jose',
    'last_name' => 'Cantos',
    'nickname' => 'magregor',
]);
//$user = new User();
//$user->fullName = 'Jose Cantos';
echo "<p>Nickname: {$user->nickname}</p>";
echo "<p>Bienvenido {$user->first_name} {$user->last_name}</p>";


