<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 21/03/2017
 * Time: 22:24
 */

$students = [
    "Emmanuel"  => 42,
    "Thierry"   => 51,
    "Pascal"    => 45,
    "Eric"      => 48,
    "Nicolas"   => 19
];


foreach ($students as $cle => $element) {
    echo"<strong>".$cle."</strong>"." : ".$element. '<br />';
}

$moyenne = array_sum($students)/count($students);
echo "<strong>"."La moyenne d'age est " .$moyenne."</strong>";
?>