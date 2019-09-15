<?php

$cURLConnection = curl_init();

curl_setopt($cURLConnection, CURLOPT_URL, 'http://204.2.62.173:8080/f178733a0c344217bf7b529262387d39/update/V1?value=0');
curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);

$phoneList = curl_exec($cURLConnection);
curl_close($cURLConnection);
?>