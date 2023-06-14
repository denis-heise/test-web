<?php

$first_operand = filter_input(INPUT_GET, 'left', FILTER_VALIDATE_FLOAT);
$second_operand = filter_input(INPUT_GET, 'right', FILTER_VALIDATE_FLOAT);
$operator = filter_input(INPUT_GET, 'operator', FILTER_VALIDATE_INT);

if (empty($first_operand) || empty($second_operand)) {
    die('Укажите оба операнда.');
};

if ($operator < 1 || $operator > 4) {
    die('Выберите корректный оператор.');
};

switch ($operator) {
    case 1:
        echo "Результат: " . ($first_operand + $second_operand);
        break;
    case 2:
        echo "Результат: " . ($first_operand - $second_operand);
        break;
    case 3:
        echo "Результат: " . ($first_operand / $second_operand);
        break;
    case 4:
        echo "Результат: " . ($first_operand * $second_operand);
        break;
};

print('<br>');
print('<a href="/">На главную</a>');
