<?php

function converteCelsiusParaFahrenheit(float $temperaturaCelsius) : float {
    return ($temperaturaCelsius * 9 / 5) + 32;
}