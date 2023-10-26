<?php
$ch = curl_init();

$url = "https://titan.csit.rmit.edu.au/~e103884/wp/.services/.staff/";

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);

curl_close($ch);

$data = json_decode($response, true);
foreach ($data as $items) {
    echo '<div class="staff">';
    echo '<h2>' . $items['firstName'] . ' ' . $items['lastName'] . '</h2>';
    echo '<p>Staff ID: ' . $items['staffID'] . '</p>';
    echo '<p>Email: ' . $items['email'] . '</p>';
    echo '</div>';
}