<?php
$access_token = 'R4TTAOd0VhSWfLhxx1R3jRTwnwzRVos9UNRKkGjf7tW/iffaL6KXn6zp3CHWafbK0z5pTfopAKBfJHIkdM6xHt+B2AcAZdfmQkESi57QDvcVLN+pMndVsi811gqmHYt0JubvPHeFV7ltS7R3hA8kMAdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

