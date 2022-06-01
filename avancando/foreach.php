<?php

$conta1 = [ 'titular' => 'Vinicius', 'saldo' => 1000];
$conta2 = ['titular' => 'Victor', 'saldo' => 1000];
$conta3 = ['titular' => 'Julia', 'saldo' => 1000];
$contasCorrentes = [$conta1, $conta2, $conta3];

$contasCorrentes[]=[
    'titular' => 'claudia',
    'saldo' => 2000
];

foreach($contasCorrentes as $conta){
    echo $conta['titular'].PHP_EOL;
}