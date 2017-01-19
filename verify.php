<?php
$access_token = '0aDAROCbKauxqagj9Rh6Mck8Yh+1vmpGCuCgfKMIxXT4NpH9Wr5wQbNn7wXFXHVGRNkb0MO5lv2A+h2oeWTJZBPlzAvogqwha1BjCpUYxt8YhTcp6zevYtc5EG84zu2uHePpljKzOXB3SzJK504m6wdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
