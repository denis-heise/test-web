<?php

function calculateAngle($hours, $minutes) {	
    $hoursAngle = ($hours + $minutes/60)/12 * 360;
    $minuteAngle = $minutes/60 * 360;
	$angle = $hoursAngle - $minuteAngle;
	if ($angle >= 360) {
		$angle -= 360;
	}
    return $angle;
};

echo calculateAngle(3, 15);
// Когда на часах 3 часа 15 минут, между стрелками 7.5 градусов.
