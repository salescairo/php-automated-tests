<?php

use App\Multiple;

require '../vendor/autoload.php';

$multiple01 = new Multiple(1000);
$sum01 = $multiple01->getThreeOrFiveMultiplesSum();
$sum02 = $multiple01->getThreeAndFiveMultiplesSum();
?>
<p>
    <b>Qual é o valor da soma de todos os números
        múltiplos de 3 ou 5 de números naturais abaixo de 1000?</b>
    <br>
    <?php echo number_format($sum01,0,'','.'); ?>
</p>
<p>
    <b>Qual é o valor da soma de todos os números 
        múltiplos de 3 e 5 de números naturais abaixo de 1000?</b>
    <br>
    <?php echo number_format($sum02,0,'','.'); ?>
</p>