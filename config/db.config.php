<?php

$server_name = 'sql211.epizy.com';
$db_username = 'epiz_26572497';
$db_password = 'TIMfKMDefQ';
$db_name     = 'epiz_26572497_covid_19_sas';

$conn = mysqli_connect($server_name, $db_username, $db_password, $db_name);

if (!$conn) {
    die('Connection Failed: ' . mysqli_connect_error());
}
