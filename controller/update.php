<?php

$json_data         = file_get_contents('https://pomber.github.io/covid19/timeseries.json');
$decoded_json_data = json_decode($json_data, true);

// Reaching to Current Date
foreach ($decoded_json_data as $key => $value) {
    $count_days = count($value) - 1;
}

$total_confirmed = 0;
$total_recovered = 0;
$total_deaths    = 0;

$total_bd_confirmed = 0;
$total_bd_recovered = 0;
$total_bd_deaths    = 0;

// Calculating Total Cases Global & Bangladesh
foreach ($decoded_json_data as $key => $value) {
    $total_confirmed += $value[$count_days]['confirmed'];
    $total_recovered += $value[$count_days]['recovered'];
    $total_deaths    += $value[$count_days]['deaths'];

    if ($key === 'Bangladesh') {
        $total_bd_confirmed += $value[$count_days]['confirmed'];
        $total_bd_recovered += $value[$count_days]['recovered'];
        $total_bd_deaths    += $value[$count_days]['deaths'];
    }
}
