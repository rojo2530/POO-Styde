<?php
require '../vendor/autoload.php';
use Styde\User;

/* $user = new User([
   'first_name' => 'Jose',
   'last_name'  => 'Cantos',
]); */
$user = new User();
$user->fill([
    'first_name' => 'Jose',
    'last_name' => 'Cantos',
]);
//$user = new User();
//$user->fullName = 'Jose Cantos';
$user->nickname = 'magregor';

if (isset($user->nickname)) {
    echo "<p>Nickname: {$user->nickname}</p>";
}
echo "<p>Bienvenido {$user->first_name} {$user->last_name}</p>";


