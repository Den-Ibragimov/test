<?php
// Первая задача (Первый вариант)
$value = -1;
if ($value == abs($value)) {
echo 'Число положительное';
}
if ($value != abs($value)) {
echo 'Число отрицательное';
}
// Второй вариант
$value = 1;
if ($value < 0) {
    echo 'Число отрицательное';
} else {
    echo 'Число положительное';
    }

//  Вторая задача

$text = 'Подбухну';
echo strlen($text);

// Третья задача

$text1 = 'Привет';
echo mb_substr($text1, -1);


