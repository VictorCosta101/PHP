<?php

$idade = 16;
$numeroDePessoas = 1;

echo "Você só pode entrar se tiver a apartir de 18 anos ou";
echo "a partit de 16 anos acompanhado" . PHP_EOL;

if($idade >= 18){
    echo "Você tem $idade anos. Pode entrar sozinho.";
} else if($idade >= 16 && $numeroDePessoas > 1){
    echo "Você tem $idade anos, está acompanhadx, então pode entrar.";
} else
    echo "Você só tem $idade anos. Você não pode entrar.";


echo PHP_EOL;

echo "Adeus!";