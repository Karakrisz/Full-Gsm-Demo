<?php
// $config = [
//     "DB_HOST" => "localhost",
//     "DB_USER" => "fullgsm_KaraKrisz",
//     "DB_PASS" => "Hacker13prog",
//     "DB_NAME" => "fullgsm_send"
// ];

$config = [
    "DB_HOST" => "localhost",
    "DB_USER" => "root",
    "DB_PASS" => "",
    "DB_NAME" => "full-gsm"
];

$connention = mysqli_connect($config['DB_HOST'], $config['DB_USER'], $config['DB_PASS'], $config['DB_NAME']);

if (!$connention) {
    die('Connection :error:' . mysqli_connect_error());
}
