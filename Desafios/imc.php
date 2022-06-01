<?PHP

$altura = 1.80;
$peso = 74;

$imc = ($peso / ($altura * $altura));

echo "Este é seu imc {$imc}".PHP_EOL;
if ($imc <= 18.5) {
    echo "O imc {$imc} está abaixo do peso" . PHP_EOL;
} elseif ($imc > 18.5 and $imc <= 24.9) {
    echo "O imc {$imc} está normal" . PHP_EOL;
}else{echo "O imc {$imc} está em sobrepeso".PHP_EOL;}
