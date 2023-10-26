<?php
$ch = curl_init();

$url = "https://titan.csit.rmit.edu.au/~e103884/wp/.services/.staff/";

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);

curl_close($ch);