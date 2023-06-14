<?php

function getNewDate($day, $numberMonth) {
    $months = ['января', 'февраля', 'марта', 'апреля', 'мая', 'июня', 'июля', 'августа', 'сентября', 'октября', 'ноября', 'декабря'];
    return $day . ' ' . $months[$numberMonth - 1];
};

echo getNewDate(13, 6);