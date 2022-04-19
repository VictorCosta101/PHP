<?php

$idade = 16;
$acompanhado = true;
echo "Você só pode entrar se tiver a partir de 18 anos ou acompanhado". PHP_EOL;

if($idade >= 18 or $acompanhado){
    echo "Você tem $idade anos." . PHP_EOL;
    echo 'Pode entrar';
}else{
    echo "Você só tem $idade anos. Você não pode entrar";
}

echo PHP_EOL;

echo "Adeus!";