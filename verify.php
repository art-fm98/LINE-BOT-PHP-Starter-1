<?php
$access_token = 'hUs5ogcoeVzkaQvU149w3srkE/eozzGKhpOy29Hx4r0TQxvsyKnpDDdQeSVjem6TqV0dBQ81o1z1iF1NHSPDX7cPvF1C9feQKmeKty6MX1+3iEw81pFuEEecuUEH0+mISEF0UXmiR3skfFlNJCdnNAdB04t89/1O/w1cDnyilFU=';


$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
