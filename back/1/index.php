<?php
function getIncome($deposit, $month, $percent){
    $income = $deposit + ($deposit * ($percent / 100) * $month / 12);
    return $income;
};
 
echo getIncome(70000, 12, 8);