<?PHP

for($i = 1; $i <=  9 ; $i++){

    echo "Tabuada do {$i}".PHP_EOL;
    for($j = 1; $j <= 9; $j++ ){
        $multiplication = $i*$j;
        echo "{$i} x {$j} = {$multiplication}".PHP_EOL;
    }
}