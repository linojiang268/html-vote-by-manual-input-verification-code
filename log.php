<?php

$total = file_exists('total.log') ? file_get_contents('total.log') : 0;
if (empty($total)) {
    $total = 0;
}
echo $total . "</br>";
echo file_exists('count.log') ? str_replace("\n", "</br>", file_get_contents('count.log')) : '无';